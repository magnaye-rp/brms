<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\SocialAuthController;
use Illuminate\Support\Facades\Route;

// Authentication Routes
Route::middleware('guest')->group(function () {
    // Login
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.post');
    
    // Registration
    Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
    Route::post('/register', [AuthController::class, 'register'])->name('register.post');
    
    // Forgot Password
    Route::get('/forgot-password', [AuthController::class, 'showForgotPassword'])->name('password.request');
    Route::post('/forgot-password', [AuthController::class, 'sendResetLink'])->name('password.email');
});

// Logout Route
Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout.get')->middleware('auth');

// OAuth Routes
Route::prefix('auth')->group(function () {
    // Google OAuth
    Route::get('/google', [SocialAuthController::class, 'redirectToProvider'])->name('auth.google');
    Route::get('/google/callback', [SocialAuthController::class, 'handleProviderCallback'])->name('auth.google.callback');
    
    // Facebook OAuth
    Route::get('/facebook', [SocialAuthController::class, 'redirectToProvider'])->name('auth.facebook');
    Route::get('/facebook/callback', [SocialAuthController::class, 'handleProviderCallback'])->name('auth.facebook.callback');
    
    // Microsoft OAuth
    Route::get('/microsoft', [SocialAuthController::class, 'redirectToProvider'])->name('auth.microsoft');
    Route::get('/microsoft/callback', [SocialAuthController::class, 'handleProviderCallback'])->name('auth.microsoft.callback');
});

// Dashboard (protected)
Route::middleware('auth')->group(function () {
    // Dashboard
    Route::get('/dashboard', function () {
        return view('client/dashboard/index', ['active' => 'dashboard']);
    })->name('dashboard');

    // Bookings
    Route::get('/bookings', function () {
        return view('client/booking/index', ['active' => 'bookings']);
    })->name('bookings');

    // Rooms & Services
    Route::get('/rooms', function () {
        return view('client/rooms/index', ['active' => 'rooms']);
    })->name('rooms');

    // Customers
    Route::get('/customers', function () {
        return view('client/customers/index', ['active' => 'customers']);
    })->name('customers');

    // Calendar
    Route::get('/calendar', function () {
        return view('client/calendar/index', ['active' => 'calendar']);
    })->name('calendar');

    // Reports
    Route::get('/reports', function () {
        return view('client/reports/index', ['active' => 'reports']);
    })->name('reports');

    // Settings
    Route::get('/settings', function () {
        return view('client/settings/index', ['active' => 'settings']);
    })->name('settings');
});

// Home route redirects to dashboard or login
Route::get('/', function () {
    if (auth()->check()) {
        return redirect()->route('dashboard');
    }
    return redirect()->route('login');
});

