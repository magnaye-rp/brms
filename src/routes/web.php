<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\SocialAuthController;
use Illuminate\Support\Facades\Route;

// Public Routes
Route::get('/', fn() => auth()->check() ? redirect()->route('dashboard') : redirect()->route('login'));

// Authentication Routes
Route::middleware('guest')->group(function () {
    Route::view('/login', 'auth.signin')->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::view('/register', 'auth.signup')->name('register');
    Route::post('/register', [AuthController::class, 'register']);
    Route::view('/forgot-password', 'auth.forgot')->name('password.request');
    Route::post('/forgot-password', [AuthController::class, 'sendResetLink']);
});

Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

// OAuth Routes
Route::prefix('auth/{provider}')->group(function () {
    Route::get('/', [SocialAuthController::class, 'redirectToProvider'])->name('auth.provider');
    Route::get('/callback', [SocialAuthController::class, 'handleProviderCallback'])->name('auth.provider.callback');
});

// Client Routes
Route::middleware('auth')->group(function () {
    Route::view('/dashboard', 'client/dashboard/index')->name('dashboard');
    Route::view('/bookings', 'client/booking/index')->name('bookings');
    Route::view('/rooms', 'client/rooms/index')->name('rooms');
    Route::view('/customers', 'client/customers/index')->name('customers');
    Route::view('/calendar', 'client/calendar/index')->name('calendar');
    Route::view('/reports', 'client/reports/index')->name('reports');
    Route::view('/settings', 'client/settings/index')->name('settings');
});

// Admin Routes
Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {
    Route::view('/dashboard', 'admin/dashboard/index')->name('dashboard');
    Route::view('/admins', 'admin/admins/index')->name('admins');
    Route::view('/users', 'admin/users/index')->name('users');
    Route::view('/reports', 'admin/reports/index')->name('reports');
    Route::view('/logs', 'admin/logs/index')->name('logs');
    Route::view('/settings', 'admin/settings/index')->name('settings');
});

// Staff Routes
Route::middleware('auth')->prefix('staff')->name('staff.')->group(function () {
    Route::view('/dashboard', 'staff/dashboard/index')->name('dashboard');
    Route::view('/bookings', 'staff/bookings/index')->name('bookings');
    Route::view('/rooms', 'staff/rooms/index')->name('rooms');
});

