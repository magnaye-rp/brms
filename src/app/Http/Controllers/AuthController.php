<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\PasswordResetRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;
use Illuminate\View\View;

class AuthController extends Controller
{
    /**
     * Show the login page.
     */
    public function showLogin(): RedirectResponse|View
    {
        if (Auth::check()) {
            return $this->redirectToDashboard();
        }

        return view('auth.signin');
    }

    /**
     * Show the registration page.
     */
    public function showRegister(): RedirectResponse|View
    {
        if (Auth::check()) {
            return $this->redirectToDashboard();
        }

        return view('auth.signup');
    }

    /**
     * Handle user login with rate limiting.
     */
    public function login(LoginRequest $request): RedirectResponse
    {
        // Check rate limit
        $key = Str::transliterate(Str::lower($request->input('email')) . '|' . $request->ip());
        
        if (RateLimiter::tooManyAttempts($key, 5)) {
            $seconds = RateLimiter::availableIn($key);
            return back()
                ->withErrors(['email' => 'Too many login attempts. Please try again in ' . $seconds . ' seconds.'])
                ->withInput();
        }

        $credentials = $request->only('email', 'password');
        $remember = $request->boolean('remember');

        if (Auth::attempt($credentials, $remember)) {
            RateLimiter::clear($key);
            $request->session()->regenerate();
            
            return redirect()
                ->intended($this->redirectToDashboard())
                ->with('success', 'Welcome back!');
        }

        // Increment rate limiter on failed attempt
        RateLimiter::hit($key, 60);

        return back()
            ->withErrors(['email' => 'Invalid email or password'])
            ->withInput();
    }

    /**
     * Handle user registration with rate limiting.
     */
    public function register(RegisterRequest $request): RedirectResponse
    {
        // Check rate limit
        $key = 'register|' . $request->ip();
        
        if (RateLimiter::tooManyAttempts($key, 10)) {
            $seconds = RateLimiter::availableIn($key);
            return back()
                ->withErrors(['email' => 'Too many registration attempts. Please try again in ' . $seconds . ' seconds.'])
                ->withInput();
        }

        $validated = $request->validatedForRegistration();

        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
        ]);

        Auth::login($user, true);
        RateLimiter::clear($key);

        return redirect()
            ->route('dashboard')
            ->with('success', 'Account created successfully!');
    }

    /**
     * Logout the user.
     */
    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()
            ->route('login')
            ->with('success', 'You have been logged out');
    }

    /**
     * Show the forgot password page.
     */
    public function showForgotPassword(): View
    {
        return view('auth.forgot');
    }

    /**
     * Send password reset link with rate limiting.
     */
    public function sendResetLink(PasswordResetRequest $request): RedirectResponse
    {
        // Check rate limit
        $key = 'reset|' . $request->input('email') . '|' . $request->ip();
        
        if (RateLimiter::tooManyAttempts($key, 3)) {
            $seconds = RateLimiter::availableIn($key);
            return back()
                ->withErrors(['email' => 'Too many reset requests. Please try again in ' . $seconds . ' seconds.'])
                ->withInput();
        }

        RateLimiter::hit($key, 300);

        // Password reset logic would go here
        // For now, we show a generic message for security
        
        return redirect()
            ->route('password.request')
            ->with('success', 'If an account with that email exists, a password reset link has been sent.');
    }

    /**
     * Redirect user to their appropriate dashboard based on role.
     */
    protected function redirectToDashboard(): RedirectResponse
    {
        $user = Auth::user();
        
        // Redirect based on user role/type
        // This can be extended based on your user roles implementation
        return redirect()->route('dashboard');
    }
}

