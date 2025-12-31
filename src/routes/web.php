<?php

use Illuminate\Support\Facades\Route;

// Dashboard
Route::get('/dashboard', function () {
    return view('client/dashboard/index');
});

// Bookings
Route::get('/bookings', function () {
    return view('client/booking/index');
});

// Rooms & Services
Route::get('/rooms', function () {
    return view('client/rooms/index');
});

// Customers
Route::get('/customers', function () {
    return view('client/customers/index');
});

// Calendar
Route::get('/calendar', function () {
    return view('client/calendar/index');
});

// Reports
Route::get('/reports', function () {
    return view('client/reports/index');
});

// Settings
Route::get('/settings', function () {
    return view('client/settings/index');
});

// Home route redirects to dashboard
Route::get('/', function () {
    return redirect('/dashboard');
});

