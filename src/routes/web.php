<?php

use Illuminate\Support\Facades\Route;

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

// Home route redirects to dashboard
Route::get('/', function () {
    return redirect()->route('dashboard');
});

