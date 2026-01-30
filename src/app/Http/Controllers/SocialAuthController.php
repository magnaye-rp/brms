<?php

namespace App\Http\Controllers;

use App\Services\OAuthService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;
use Laravel\Socialite\Facades\Socialite;

class SocialAuthController extends Controller
{
    /**
     * Valid OAuth providers.
     */
    protected array $validProviders = ['google', 'facebook', 'microsoft'];

    /**
     * Cached configuration keys.
     */
    protected array $configCache = [];

    public function __construct(protected OAuthService $oauthService) {}

    /**
     * Redirect user to OAuth provider.
     */
    public function redirectToProvider(string $provider): RedirectResponse
    {
        if (!$this->isValidProvider($provider)) {
            return $this->errorRedirect('Invalid provider');
        }

        try {
            $config = $this->getProviderConfig($provider);
            
            if (!$this->isConfigured($config)) {
                Log::error("OAuth not configured: {$provider}");
                return $this->errorRedirect("{$provider} authentication is not configured");
            }

            return Socialite::driver($provider)->setConfig($config)->redirect();
        } catch (\Exception $e) {
            Log::error("OAuth redirect error: " . $e->getMessage(), [
                'provider' => $provider,
                'exception' => $e->getTraceAsString(),
            ]);
            return $this->errorRedirect('Authentication redirect failed. Please try again.');
        }
    }

    /**
     * Handle OAuth provider callback.
     */
    public function handleProviderCallback(string $provider): RedirectResponse
    {
        if (!$this->isValidProvider($provider)) {
            return $this->errorRedirect('Invalid provider');
        }

        try {
            $config = $this->getProviderConfig($provider);
            
            $socialUser = Socialite::driver($provider)
                ->setConfig($config)
                ->stateless()
                ->user();

            $user = $this->oauthService->findOrCreateUser($provider, $socialUser);
            
            Auth::login($user, true);
            request()->session()->regenerate();

            return redirect()
                ->intended(route('dashboard'))
                ->with('success', 'Logged in successfully via ' . ucfirst($provider));
        } catch (\Exception $e) {
            Log::error("OAuth callback error: " . $e->getMessage(), [
                'provider' => $provider,
                'exception' => $e->getTraceAsString(),
            ]);
            return $this->errorRedirect('Authentication failed. Please try again.');
        }
    }

    /**
     * Get provider configuration with caching.
     */
    protected function getProviderConfig(string $provider): array
    {
        // Return cached config if available
        if (isset($this->configCache[$provider])) {
            return $this->configCache[$provider];
        }

        // Cache config for this request
        $config = config("services.$provider") ?? [];
        $this->configCache[$provider] = $config;

        return $config;
    }

    /**
     * Check if provider is valid.
     */
    protected function isValidProvider(string $provider): bool
    {
        return in_array($provider, $this->validProviders, true);
    }

    /**
     * Check if provider is properly configured.
     */
    protected function isConfigured(?array $config): bool
    {
        return !empty($config) && 
               !empty($config['client_id']) && 
               !empty($config['client_secret']);
    }

    /**
     * Get valid OAuth providers list.
     */
    public function getValidProviders(): array
    {
        return $this->validProviders;
    }

    /**
     * Get configured providers only.
     */
    public function getConfiguredProviders(): array
    {
        return array_filter($this->validProviders, function (string $provider): bool {
            return $this->isConfigured($this->getProviderConfig($provider));
        });
    }

    /**
     * Create error redirect response.
     */
    protected function errorRedirect(string $message): RedirectResponse
    {
        return redirect()
            ->route('login')
            ->withErrors(['oauth_error' => $message])
            ->with('error_type', 'oauth');
    }
}

