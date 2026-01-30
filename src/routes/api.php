<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| These routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Enjoy building your API!
|
*/

// Health check endpoint (no auth required)
Route::get('/health', function () {
    return response()->json([
        'status' => 'healthy',
        'timestamp' => now()->toIso8601String(),
        'version' => '1.0.0',
    ]);
});

// API routes requiring authentication
Route::middleware(['auth:api'])->group(function () {
    // User info
    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    // Logout (revoke tokens)
    Route::post('/logout', function (Request $request) {
        $request->user()->token()->revoke();
        return response()->json([
            'message' => 'Successfully logged out'
        ]);
    });

    // User profile routes
    Route::prefix('profile')->group(function () {
        Route::get('/', [\App\Http\Controllers\Api\UserController::class, 'show']);
        Route::put('/', [\App\Http\Controllers\Api\UserController::class, 'update']);
        Route::put('/password', [\App\Http\Controllers\Api\UserController::class, 'updatePassword']);
    });

    // Placeholder for future API endpoints
    // Route::apiResources([
    //     'bookings' => \App\Http\Controllers\Api\BookingController::class,
    //     'rooms' => \App\Http\Controllers\Api\RoomController::class,
    // ]);
});

// Rate limited API routes
Route::middleware(['throttle:api'])->group(function () {
    // Additional rate-limited endpoints can go here
});

