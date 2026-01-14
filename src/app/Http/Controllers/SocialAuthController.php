<?php

namespace App\Http\Controllers;

use App\Services\OAuthService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Laravel\Socialite\Facades\Socialite;

class SocialAuthController extends Controller
{
    /**
     * Supported OAuth providers.
     */
    protected array $providers = ['google', 'facebook', 'microsoft'];

    /**
     * OAuth Service instance.
     */
    protected OAuthService $oauthService;

    /**
     * Create a new controller instance.
     */
    public function __construct(OAuthService $oauthService)
    {
        $this->oauthService = $oauthService;
    }

    /**
     * Redirect to OAuth provider.
     */
    public function redirectToProvider(string $provider)
    {
        if (!in_array($provider, $this->providers)) {
            return redirect()->route('login')->withErrors(['error' => 'Invalid OAuth provider.']);
        }

        try {
            $config = config("services.{$provider}");
            
            if (!$config || !$config['client_id'] || !$config['client_secret']) {
                Log::error("OAuth provider not configured: {$provider}");
                return redirect()->route('login')->withErrors(['error' => ucfirst($provider) . ' authentication is not configured.']);
            }

            return Socialite::driver($provider)->setConfig($config)->redirect();
        } catch (\Exception $e) {
            Log::error("OAuth redirect error for {$provider}: " . $e->getMessage());
            return redirect()->route('login')->withErrors(['error' => "Could not redirect to {$provider}. Please try again."]);
        }
    }

    /**
     * Handle OAuth callback.
     */
    public function handleProviderCallback(string $provider)
    {
        if (!in_array($provider, $this->providers)) {
            return redirect()->route('login')->withErrors(['error' => 'Invalid OAuth provider.']);
        }

        try {
            $config = config("services.{$provider}");
            $socialUser = Socialite::driver($provider)->setConfig($config)->stateless()->user();

            // Use OAuthService to find or create user
            $user = $this->oauthService->findOrCreateUser($provider, $socialUser);

            Auth::login($user, true);
            request()->session()->regenerate();

            return redirect()->intended(route('dashboard'))->with('success', "Welcome! You've been logged in with {$provider}.");
        } catch (\Exception $e) {
            Log::error("OAuth callback error for {$provider}: " . $e->getMessage());
            return redirect()->route('login')->withErrors(['error' => 'Could not authenticate with ' . ucfirst($provider) . '. Please try again.']);
        }
    }

    /**
     * Disconnect OAuth provider from user account.
     */
    public function disconnectProvider(Request $request, string $provider)
    {
        $user = Auth::user();

        if (!in_array($provider, $this->providers)) {
            return back()->withErrors(['error' => 'Invalid OAuth provider.']);
        }

        if ($user->provider !== $provider) {
            return back()->withErrors(['error' => 'This provider is not connected to your account.']);
        }

        if (is_null($user->password)) {
            return back()->withErrors(['error' => 'You cannot disconnect this provider without a password set.']);
        }

        $this->oauthService->disconnect($user, $provider);

        return back()->with('success', ucfirst($provider) . ' has been disconnected from your account.');
    }
}

