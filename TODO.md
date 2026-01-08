# OAuth Authentication Implementation Plan

## Overview
Implement full OAuth authentication system with:
- Google OAuth
- Facebook OAuth
- Microsoft OAuth
- Password-based authentication

## Phase 1: Dependencies & Configuration ✅

### 1.1 Install Required Packages ✅
- [x] Install `laravel/passport` for OAuth2 server
- [x] Install `laravel/socialite` for social OAuth providers

### 1.2 Update composer.json ✅
- [x] Add laravel/passport requirement
- [x] Add laravel/socialite requirement

### 1.3 Configuration Updates ✅
- [x] Update `config/auth.php` - Add Passport guard
- [x] Update `config/services.php` - Add OAuth provider credentials
- [x] Create `config/socialite.php` - Additional OAuth configuration

## Phase 2: Database Updates ✅

### 2.1 Update Users Migration ✅
- [x] Add `provider` field (google, facebook, microsoft, null)
- [x] Add `provider_id` field (unique identifier from OAuth provider)
- [x] Add `avatar` field (profile picture URL)

### 2.2 Run Migrations ⏳ (Pending)
- [ ] Run user migration updates
- [ ] Run Passport migrations

## Phase 3: Models & Traits ✅

### 3.1 Update User Model ✅
- [x] Add OAuth fields to `$fillable`
- [x] Add `HasApiTokens` trait from Passport
- [x] Add accessor for avatar
- [x] Add `findByProvider` method
- [x] Add `isOAuthUser` method

### 3.2 Create Social User Processor ✅
- [x] Create `OAuthService` for handling social user creation/lookup

## Phase 4: Controllers ✅

### 4.1 AuthController ✅
- [x] `showLogin()` - Display login form
- [x] `showRegister()` - Display registration form
- [x] `login()` - Handle password-based login
- [x] `register()` - Handle password-based registration
- [x] `logout()` - Handle logout
- [x] `showForgotPassword()` - Display forgot password form
- [x] `sendResetLink()` - Handle forgot password request

### 4.2 SocialAuthController ✅
- [x] `redirectToProvider($provider)` - Redirect to OAuth provider
- [x] `handleProviderCallback($provider)` - Handle OAuth callback
- [x] `disconnectProvider($provider)` - Disconnect social account

## Phase 5: Services ✅

### 5.1 OAuthService ✅
- [x] `findOrCreateUser($provider, $socialUser)` - Find or create user
- [x] `canDisconnect($user, $provider)` - Check if can disconnect
- [x] `disconnect($user, $provider)` - Disconnect provider

## Phase 6: Routes ✅

### 6.1 Authentication Routes ✅
- [x] GET `/login` - Login form
- [x] POST `/login` - Login submission
- [x] GET `/register` - Registration form
- [x] POST `/register` - Registration submission
- [x] POST `/logout` - Logout
- [x] GET `/logout` - Logout (GET fallback)
- [x] GET `/forgot-password` - Forgot password form
- [x] POST `/forgot-password` - Send reset link

### 6.2 OAuth Routes ✅
- [x] GET `/auth/google` - Google OAuth redirect
- [x] GET `/auth/google/callback` - Google OAuth callback
- [x] GET `/auth/facebook` - Facebook OAuth redirect
- [x] GET `/auth/facebook/callback` - Facebook OAuth callback
- [x] GET `/auth/microsoft` - Microsoft OAuth redirect
- [x] GET `/auth/microsoft/callback` - Microsoft OAuth callback

## Phase 7: Views & Frontend ✅

### 7.1 Update Sign-In View ✅
- [x] Update forms to use Laravel routes
- [x] Add CSRF tokens
- [x] Update social buttons to use OAuth routes
- [x] Add error display

### 7.2 Update Sign-Up View ✅
- [x] Update forms to use Laravel routes
- [x] Add CSRF tokens
- [x] Update social buttons to use OAuth routes
- [x] Add error display

### 7.3 Update Forgot Password View ✅
- [x] Update form to use Laravel routes
- [x] Add CSRF tokens

## Phase 8: Environment Configuration ⏳

### 8.1 Configure .env File ⏳
Add the following to your `.env` file:

```env
# Passport Keys (generate with: php artisan passport:keys)
PASSPORT_CLIENT_ID=your-client-id
PASSPORT_CLIENT_SECRET=your-client-secret

# Google OAuth
GOOGLE_CLIENT_ID=your-google-client-id
GOOGLE_CLIENT_SECRET=your-google-client-secret
GOOGLE_REDIRECT_URI=http://localhost/auth/google/callback

# Facebook OAuth
FACEBOOK_CLIENT_ID=your-facebook-app-id
FACEBOOK_CLIENT_SECRET=your-facebook-app-secret
FACEBOOK_REDIRECT_URI=http://localhost/auth/facebook/callback

# Microsoft OAuth
MICROSOFT_CLIENT_ID=your-microsoft-client-id
MICROSOFT_CLIENT_SECRET=your-microsoft-client-secret
MICROSOFT_REDIRECT_URI=http://localhost/auth/microsoft/callback
MICROSOFT_TENANT_ID=common
```

### 8.2 Generate Keys ⏳
- [ ] Run `php artisan passport:keys` to generate encryption keys
- [ ] Run `php artisan passport:client --password` to create password grant client

## Phase 9: Setup Commands

Run these commands to complete the setup:

```bash
# 1. Install dependencies
cd src && composer install

# 2. Run migrations
php artisan migrate

# 3. Generate Passport keys
php artisan passport:keys

# 4. Create Passport client (optional - for API access)
php artisan passport:client --password

# 5. Clear cache
php artisan config:clear
php artisan cache:clear

# 6. Serve the application
php artisan serve
```

## Phase 10: OAuth Provider Setup

### Google OAuth Setup
1. Go to Google Cloud Console: https://console.cloud.google.com/
2. Create a new project or select existing one
3. Enable Google+ API
4. Go to Credentials → Create Credentials → OAuth client ID
5. Configure consent screen
6. Add authorized redirect URIs:
   - `http://localhost/auth/google/callback`
   - `http://127.0.0.1:8000/auth/google/callback`
7. Copy Client ID and Client Secret to `.env`

### Facebook OAuth Setup
1. Go to Facebook Developers: https://developers.facebook.com/
2. Create a new app
3. Add Facebook Login product
4. Configure OAuth redirect URIs:
   - `http://localhost/auth/facebook/callback`
   - `http://127.0.0.1:8000/auth/facebook/callback`
5. Copy App ID and App Secret to `.env`

### Microsoft OAuth Setup
1. Go to Azure Portal: https://portal.azure.com/
2. Register a new application in Azure AD
3. Configure redirect URIs:
   - `http://localhost/auth/microsoft/callback`
   - `http://127.0.0.1:8000/auth/microsoft/callback`
4. Copy Application (client) ID and Client Secret to `.env`
5. Set Tenant ID to "common" for multi-tenant access

## Files Created/Modified

### New Files
- `src/app/Http/Controllers/AuthController.php` - Authentication controller
- `src/app/Http/Controllers/SocialAuthController.php` - Social OAuth controller
- `src/app/Services/OAuthService.php` - OAuth service layer
- `src/app/Providers/AuthServiceProvider.php` - Passport configuration
- `src/config/socialite.php` - Socialite configuration

### Modified Files
- `src/composer.json` - Added Passport and Socialite
- `src/config/auth.php` - Added API guard with Passport
- `src/config/services.php` - Added OAuth provider credentials
- `src/database/migrations/0001_01_01_000000_create_users_table.php` - Added OAuth fields
- `src/app/Models/User.php` - Added OAuth traits and methods
- `src/routes/web.php` - Added auth and OAuth routes
- `src/resources/views/auth/signin.blade.php` - Integrated with Laravel auth
- `src/resources/views/auth/signup.blade.php` - Integrated with Laravel auth
- `src/resources/views/auth/forgot.blade.php` - Integrated with Laravel auth

## Status: IMPLEMENTATION COMPLETE

The OAuth authentication system is now implemented. To complete the setup:

1. **Install dependencies:** `cd src && composer install`
2. **Configure .env:** Add your OAuth credentials
3. **Run migrations:** `php artisan migrate`
4. **Generate Passport keys:** `php artisan passport:keys`
5. **Set up OAuth providers:** Create apps in Google, Facebook, Microsoft developer consoles


