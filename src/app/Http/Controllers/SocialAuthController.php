<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Laravel\Socialite\Facades\Socialite;

class SocialAuthController extends Controller
{
    /**
     * Supported OAuth providers.
     */
    protected $providers = ['google', 'facebook', 'microsoft'];

    /**
     * Redirect to OAuth provider.
     */
    public function redirectToProvider(string $provider)
    {
        // Validate provider
        if (!in_array($provider, $this->providers)) {
            return redirect()
                ->route('login')
                ->withErrors(['error' => 'Invalid OAuth provider.']);
        }

        try {
            $config = config("services.{$provider}");
            
            if (!$config || !$config['client_id'] || !$config['client_secret']) {
                Log::error("OAuth provider not configured: {$provider}");
                return redirect()
                    ->route('login')
                    ->withErrors(['error' => ucfirst($provider) . ' authentication is not configured.']);
            }

            return Socialite::driver($provider)
                ->setConfig($config)
                ->redirect();
        } catch (\Exception $e) {
            Log::error("OAuth redirect error for {$provider}: " . $e->getMessage());
            
            return redirect()
                ->route('login')
                ->withErrors(['error' => "Could not redirect to {$provider}. Please try again."]);
        }
    }

    /**
     * Handle OAuth callback.
     */
    public function handleProviderCallback(string $provider)
    {
        // Validate provider
        if (!in_array($provider, $this->providers)) {
            return redirect()
                ->route('login')
                ->withErrors(['error' => 'Invalid OAuth provider.']);
        }

        try {
            $config = config("services.{$provider}");
            
            // Get user from OAuth provider
            $socialUser = Socialite::driver($provider)
                ->setConfig($config)
                ->stateless()
                ->user();

            // Find or create user
            $user = $this->findOrCreateUser($provider, $socialUser);

            // Log in the user
            Auth::login($user, true);

            // Regenerate session
            request()->session()->regenerate();

            return redirect()
                ->intended(route('dashboard'))
                ->with('success', "Welcome! You've been logged in with {$provider}.");
                
        } catch (\Exception $e) {
            Log::error("OAuth callback error for {$provider}: " . $e->getMessage());
            
            return redirect()
                ->route('login')
                ->withErrors(['error' => 'Could not authenticate with ' . ucfirst($provider) . '. Please try again.']);
        }
    }

    /**
     * Find or create a user from OAuth provider data.
     *
     * @param string $provider
     * @param $socialUser
     * @return \App\Models\User
     */
    protected function findOrCreateUser(string $provider, $socialUser): User
    {
        // Check if user already exists with this provider and ID
        $user = User::findByProvider($provider, $socialUser->getId());

        if ($user) {
            // Update user information
            $user->update([
                'avatar' => $socialUser->getAvatar(),
            ]);
            
            return $user;
        }

        // Check if user exists with the same email
        if ($socialUser->getEmail()) {
            $user = User::where('email', $socialUser->getEmail())->first();

            if ($user) {
                // Link existing user to OAuth provider
                $user->update([
                    'provider' => $provider,
                    'provider_id' => $socialUser->getId(),
                    'avatar' => $socialUser->getAvatar(),
                ]);

                return $user;
            }
        }

        // Create new user
        $name = $socialUser->getName() ?? $socialUser->getNickname() ?? $socialUser->getEmail();
        
        return User::create([
            'name' => $name,
            'email' => $socialUser->getEmail() ?? "{$provider}_user_{$socialUser->getId()}@oauth.local",
            'provider' => $provider,
            'provider_id' => $socialUser->getId(),
            'avatar' => $socialUser->getAvatar(),
            'password' => null, // OAuth users don't have a password
        ]);
    }

    /**
     * Disconnect OAuth provider from user account.
     */
    public function disconnectProvider(Request $request, string $provider)
    {
        $user = Auth::user();

        // Validate provider
        if (!in_array($provider, $this->providers)) {
            return back()->withErrors(['error' => 'Invalid OAuth provider.']);
        }

        // Check if user has this provider connected
        if ($user->provider !== $provider) {
            return back()->withErrors(['error' => 'This provider is not connected to your account.']);
        }

        // Check if user has a password (can only disconnect if they have a password)
        if (is_null($user->password)) {
            return back()->withErrors(['error' => 'You cannot disconnect this provider because you do not have a password set. Please set a password first.']);
        }

        // Disconnect the provider
        $user->update([
            'provider' => null,
            'provider_id' => null,
        ]);

        return back()->with('success', ucfirst($provider) . ' has been disconnected from your account.');
    }

    /**
     * Get user data from OAuth provider (for debugging).
     */
    public function getUserData(string $provider)
    {
        if (!in_array($provider, $this->providers)) {
            return response()->json(['error' => 'Invalid provider'], 400);
        }

        try {
            $config = config("services.{$provider}");
            $socialUser = Socialite::driver($provider)
                ->setConfig($config)
                ->stateless()
                ->user();
                
            return response()->json([
                'id' => $socialUser->getId(),
                'name' => $socialUser->getName(),
                'email' => $socialUser->getEmail(),
                'avatar' => $socialUser->getAvatar(),
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}

