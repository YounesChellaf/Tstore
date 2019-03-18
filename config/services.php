<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => env('SES_REGION', 'us-east-1'),
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
        'webhook' => [
            'secret' => env('STRIPE_WEBHOOK_SECRET'),
            'tolerance' => env('STRIPE_WEBHOOK_TOLERANCE', 300),
        ],
    ],
    'facebook' => [
        'client_id' => env('APP_ID','632278577225038'),
        'client_secret' => env('APP_SECRET','954deb6ad5f83a900d6b2e9c072afdda'),
        'redirect' => 'http://localhost:8000/auth/facebook/callback',
    ],
    'google' => [
        'client_id' => env('APP_ID','178451361205-k9deteglvkgi3gtriun3pthjcnhmeq6t.apps.googleusercontent.com'),
        'client_secret' => env('APP_SECRET','VMV-RewhpzgYWCW8VrR_PW78'),
        'redirect' => 'http://localhost:8000/auth/google/callback',
    ],
    'instagram' => [
        'client_id' => env('APP_ID',' 2400334690594fdd91a639580b8c59ee'),
        'client_secret' => env('APP_SECRET',' 7068c52f94c6407fb4ea3a6fbc62efa6'),
        'redirect' => 'http://localhost:8000/auth/instagram/callback',
    ],

];
