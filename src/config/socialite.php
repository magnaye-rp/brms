<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Third Party OAuth Services
    |--------------------------------------------------------------------------
    |
    | This file configures the OAuth services for Laravel Socialite.
    | You need to create apps in the respective developer consoles and
    | add the credentials here.
    |
    | Google: https://console.cloud.google.com/
    | Facebook: https://developers.facebook.com/
    | Microsoft: https://portal.azure.com/
    |
    */

    'google' => [
        'client_id' => env('GOOGLE_CLIENT_ID'),
        'client_secret' => env('GOOGLE_CLIENT_SECRET'),
        'redirect' => env('GOOGLE_REDIRECT_URI', 'http://localhost/auth/google/callback'),
    ],

    'facebook' => [
        'client_id' => env('FACEBOOK_CLIENT_ID'),
        'client_secret' => env('FACEBOOK_CLIENT_SECRET'),
        'redirect' => env('FACEBOOK_REDIRECT_URI', 'http://localhost/auth/facebook/callback'),
    ],

    'microsoft' => [
        'client_id' => env('MICROSOFT_CLIENT_ID'),
        'client_secret' => env('MICROSOFT_CLIENT_SECRET'),
        'redirect' => env('MICROSOFT_REDIRECT_URI', 'http://localhost/auth/microsoft/callback'),
        'tenant_id' => env('MICROSOFT_TENANT_ID', 'common'),
    ],
];

