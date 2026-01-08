<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\Log;
use Laravel\Socialite\Contracts\User as SocialUser;

class OAuthService
{
    /**
     * Find or create user from social provider.
     *
     * @param string $provider
     * @param SocialUser $socialUser
     * @return User
     */
    public function findOrCreateUser(string $provider, SocialUser $socialUser): User
    {
        Log::info("Processing OAuth user for provider: {$provider}", [
            'provider_id' => $socialUser->getId(),
            'email' => $socialUser->getEmail(),
        ]);

        // Check if user already exists with this provider and ID
        $user = User::findByProvider($provider, $socialUser->getId());

        if ($user) {
            $this->updateUserFromSocial($user, $provider, $socialUser);
            return $user;
        }

        // Check if user exists with the same email
        if ($socialUser->getEmail()) {
            $user = User::where('email', $socialUser->getEmail())->first();

            if ($user) {
                $this->linkSocialAccount($user, $provider, $socialUser);
                return $user;
            }
        }

        // Create new user
        return $this->createUserFromSocial($provider, $socialUser);
    }

    /**
     * Create a new user from social provider data.
     *
     * @param string $provider
     * @param SocialUser $socialUser
     * @return User
     */
    protected function createUserFromSocial(string $provider, SocialUser $socialUser): User
    {
        $name = $this->extractName($socialUser);
        $email = $socialUser->getEmail() ?? $this->generatePlaceholderEmail($provider, $socialUser);

        $user = User::create([
            'name' => $name,
            'email' => $email,
            'provider' => $provider,
            'provider_id' => $socialUser->getId(),
            'avatar' => $socialUser->getAvatar(),
            'password' => null,
        ]);

        Log::info("Created new OAuth user", [
            'user_id' => $user->id,
            'provider' => $provider,
            'email' => $user->email,
        ]);

        return $user;
    }

    /**
     * Update existing user from social provider data.
     *
     * @param User $user
     * @param string $provider
     * @param SocialUser $socialUser
     * @return User
     */
    protected function updateUserFromSocial(User $user, string $provider, SocialUser $socialUser): User
    {
        $updateData = [];

        // Update avatar if available
        if ($socialUser->getAvatar()) {
            $updateData['avatar'] = $socialUser->getAvatar();
        }

        // Update name if it was empty
        if (empty($user->name) || $user->isOAuthUser()) {
            $updateData['name'] = $this->extractName($socialUser);
        }

        if (!empty($updateData)) {
            $user->update($updateData);
            Log::info("Updated OAuth user", ['user_id' => $user->id]);
        }

        return $user;
    }

    /**
     * Link social account to existing user.
     *
     * @param User $user
     * @param string $provider
     * @param SocialUser $socialUser
     * @return User
     */
    protected function linkSocialAccount(User $user, string $provider, SocialUser $socialUser): User
    {
        $user->update([
            'provider' => $provider,
            'provider_id' => $socialUser->getId(),
            'avatar' => $socialUser->getAvatar(),
        ]);

        Log::info("Linked social account to existing user", [
            'user_id' => $user->id,
            'provider' => $provider,
        ]);

        return $user;
    }

    /**
     * Extract name from social user.
     *
     * @param SocialUser $socialUser
     * @return string
     */
    protected function extractName(SocialUser $socialUser): string
    {
        // Use name if available
        if ($socialUser->getName()) {
            return $socialUser->getName();
        }

        // Try to construct from first and last name
        if ($socialUser->getFirstName() || $socialUser->getLastName()) {
            return trim($socialUser->getFirstName() . ' ' . $socialUser->getLastName());
        }

        // Use nickname
        if ($socialUser->getNickname()) {
            return $socialUser->getNickname();
        }

        // Use email local part as name
        if ($socialUser->getEmail()) {
            return explode('@', $socialUser->getEmail())[0];
        }

        // Fallback to provider and ID
        return 'User_' . $socialUser->getId();
    }

    /**
     * Generate placeholder email for OAuth users without email.
     *
     * @param string $provider
     * @param SocialUser $socialUser
     * @return string
     */
    protected function generatePlaceholderEmail(string $provider, SocialUser $socialUser): string
    {
        return "{$provider}_{$socialUser->getId()}@oauth.local";
    }

    /**
     * Check if user can disconnect from provider.
     *
     * @param User $user
     * @param string $provider
     * @return bool
     */
    public function canDisconnect(User $user, string $provider): bool
    {
        // User must have a password to disconnect
        if (is_null($user->password)) {
            return false;
        }

        return $user->provider === $provider;
    }

    /**
     * Disconnect social provider from user.
     *
     * @param User $user
     * @param string $provider
     * @return User
     */
    public function disconnect(User $user, string $provider): User
    {
        if (!$this->canDisconnect($user, $provider)) {
            throw new \Exception('Cannot disconnect this provider.');
        }

        $user->update([
            'provider' => null,
            'provider_id' => null,
        ]);

        Log::info("Disconnected social provider from user", [
            'user_id' => $user->id,
            'provider' => $provider,
        ]);

        return $user;
    }
}

