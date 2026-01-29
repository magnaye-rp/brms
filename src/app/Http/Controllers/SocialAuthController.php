<?php

namespace App\Http\Controllers;

use App\Services\OAuthService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Laravel\Socialite\Facades\Socialite;

class SocialAuthController extends Controller
{
    protected array $validProviders = ['google', 'facebook', 'microsoft'];

    public function __construct(protected OAuthService $oauthService) {}

    public function redirectToProvider(string $provider)
    {
        if (!$this->isValidProvider($provider)) {
            return $this->errorRedirect('Invalid provider');
        }

        try {
            $config = config("services.$provider");
            if (!$this->isConfigured($config)) {
                Log::error("OAuth not configured: $provider");
                return $this->errorRedirect("$provider not configured");
            }
            return Socialite::driver($provider)->setConfig($config)->redirect();
        } catch (\Exception $e) {
            Log::error("OAuth redirect error: " . $e->getMessage());
            return $this->errorRedirect('Redirect failed');
        }
    }

    public function handleProviderCallback(string $provider)
    {
        if (!$this->isValidProvider($provider)) {
            return $this->errorRedirect('Invalid provider');
        }

        try {
            $config = config("services.$provider");
            $socialUser = Socialite::driver($provider)->setConfig($config)->stateless()->user();
            $user = $this->oauthService->findOrCreateUser($provider, $socialUser);
            Auth::login($user, true);
            request()->session()->regenerate();
            return redirect()->intended(route('dashboard'))->with('success', 'Logged in successfully');
        } catch (\Exception $e) {
            Log::error("OAuth callback error: " . $e->getMessage());
            return $this->errorRedirect('Authentication failed');
        }
    }

    protected function isValidProvider(string $provider): bool
    {
        return in_array($provider, $this->validProviders);
    }

    protected function isConfigured(?array $config): bool
    {
        return $config && $config['client_id'] && $config['client_secret'];
    }

    protected function errorRedirect(string $message): \Illuminate\Http\RedirectResponse
    {
        return redirect()->route('login')->withErrors(['error' => $message]);
    }
}

