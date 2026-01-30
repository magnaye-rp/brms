<?php

namespace App\Services;

use App\Exceptions\AuthenticationException;
use App\Models\User;
use Illuminate\Support\Facades\DB;
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
     * @throws AuthenticationException
     */
    public function findOrCreateUser(string $provider, SocialUser $socialUser): User
    {
        $providerId = $socialUser->getId();
        
        Log::info("Processing OAuth user for provider: {$provider}", [
            'provider_id' => $providerId,
            'email' => $socialUser->getEmail(),
        ]);

        // Use transaction for atomicity when creating new users
        return DB::transaction(function () use ($provider, $socialUser, $providerId) {
            // Check if user already exists with this provider and ID
            $user = User::findByProvider($provider, $providerId);

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
        });
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
        $needsUpdate = false;

        // Update avatar if available and different
        if ($socialUser->getAvatar() && $user->avatar !== $socialUser->getAvatar()) {
            $updateData['avatar'] = $socialUser->getAvatar();
            $needsUpdate = true;
        }

        // Update name if it was empty or user is OAuth user
        if (empty($user->name) || $user->isOAuthUser()) {
            $newName = $this->extractName($socialUser);
            if ($user->name !== $newName) {
                $updateData['name'] = $newName;
                $needsUpdate = true;
            }
        }

        if ($needsUpdate) {
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
            'avatar' => $socialUser->getAvatar() ?? $user->avatar,
        ]);

        Log::info("Linked social account to existing user", [
            'user_id' => $user->id,
            'provider' => $provider,
        ]);

        return $user;
    }

    /**
     * Extract name from social user with multiple fallbacks.
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
        $firstName = $socialUser->getFirstName() ?? '';
        $lastName = $socialUser->getLastName() ?? '';
        
        if ($firstName || $lastName) {
            return trim($firstName . ' ' . $lastName);
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
        return sprintf('%s_%s@oauth.local', $provider, $socialUser->getId());
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
     * @throws AuthenticationException
     */
    public function disconnect(User $user, string $provider): User
    {
        if (!$this->canDisconnect($user, $provider)) {
            throw new AuthenticationException(
                'Cannot disconnect this provider. You must have a password set.',
                'disconnect_failed'
            );
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

    /**
     * Find user by email across all providers.
     *
     * @param string $email
     * @return User|null
     */
    public function findByEmail(string $email): ?User
    {
        return User::where('email', $email)->first();
    }

    /**
     * Check if email is already registered.
     *
     * @param string $email
     * @return bool
     */
    public function emailExists(string $email): bool
    {
        return User::where('email', $email)->exists();
    }
}

