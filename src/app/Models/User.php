<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Cache;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable, HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'provider',
        'provider_id',
        'avatar',
        'email_verified_at',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    /**
     * Cache TTL in seconds for user lookups.
     */
    protected const CACHE_TTL = 3600; // 1 hour

    /**
     * Find user by OAuth provider with caching.
     *
     * @param string $provider
     * @param string $providerId
     * @return \App\Models\User|null
     */
    public static function findByProvider(string $provider, string $providerId): ?self
    {
        $cacheKey = "user_provider:{$provider}:{$providerId}";
        
        return Cache::remember($cacheKey, self::CACHE_TTL, function () use ($provider, $providerId) {
            return static::where('provider', $provider)
                ->where('provider_id', $providerId)
                ->first();
        });
    }

    /**
     * Find user by email with caching.
     *
     * @param string $email
     * @return \App\Models\User|null
     */
    public static function findByEmail(string $email): ?self
    {
        $cacheKey = "user_email:" . md5(strtolower($email));
        
        return Cache::remember($cacheKey, self::CACHE_TTL, function () use ($email) {
            return static::where('email', $email)->first();
        });
    }

    /**
     * Check if email exists with caching.
     *
     * @param string $email
     * @return bool
     */
    public static function emailExists(string $email): bool
    {
        return static::findByEmail($email) !== null;
    }

    /**
     * Check if user authenticated via OAuth.
     *
     * @return bool
     */
    public function isOAuthUser(): bool
    {
        return $this->provider !== null;
    }

    /**
     * Get the OAuth provider name.
     *
     * @return string|null
     */
    public function getOAuthProviderAttribute(): ?string
    {
        return $this->provider;
    }

    /**
     * Get avatar URL or default.
     *
     * @return string
     */
    public function getAvatarUrlAttribute(): string
    {
        if ($this->avatar) {
            return $this->avatar;
        }
        
        // Generate default avatar based on name initials
        $initials = $this->getInitials();
        return "https://ui-avatars.com/api/?name={$initials}&background=2196f3&color=fff";
    }

    /**
     * Get user initials from name.
     *
     * @return string
     */
    public function getInitials(): string
    {
        $name = $this->name ?? '';
        $words = preg_split('/\s+/', trim($name));
        
        if (count($words) >= 2) {
            return strtoupper(substr($words[0], 0, 1) . substr(end($words), 0, 1));
        }
        
        return strtoupper(substr($name, 0, min(2, strlen($name))));
    }

    /**
     * Clear user cache when model is updated.
     */
    protected static function boot(): void
    {
        parent::boot();

        static::updating(function (self $user): void {
            $user->clearCache();
        });

        static::deleting(function (self $user): void {
            $user->clearCache();
        });
    }

    /**
     * Clear all cache entries for this user.
     */
    public function clearCache(): void
    {
        $cacheKeys = [
            "user_email:" . md5(strtolower($this->email)),
            "user_provider:{$this->provider}:{$this->provider_id}",
        ];

        foreach ($cacheKeys as $key) {
            Cache::forget($key);
        }
    }

    /**
     * Get user's dashboard route based on role.
     *
     * @return string
     */
    public function getDashboardRoute(): string
    {
        // Role-based routing can be extended here
        return 'dashboard';
    }

    /**
     * Check if user has a specific role.
     * This can be extended based on your roles implementation.
     *
     * @param string $role
     * @return bool
     */
    public function hasRole(string $role): bool
    {
        // Basic implementation - extend as needed
        return false;
    }

    /**
     * Check if user is an admin.
     *
     * @return bool
     */
    public function isAdmin(): bool
    {
        return $this->hasRole('admin');
    }

    /**
     * Check if user is staff.
     *
     * @return bool
     */
    public function isStaff(): bool
    {
        return $this->hasRole('staff');
    }

    /**
     * Check if user is a client.
     *
     * @return bool
     */
    public function isClient(): bool
    {
        return !$this->isAdmin() && !$this->isStaff();
    }
}
