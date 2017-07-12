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
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'paypal' => [
        'client_id' => 'AeUBVMYXl8sEXSpFzFq4Bo-ue09A2w2m1xROFqFKdjKln2SNN5FrtN2TNMy_LDQaGDOd6Z98kXWBRtGA',
        'secret' => 'EBvmQxjXU9leQFWyON4I9BNvFJZgvFUGY2oRe9DQbXFG5GxtspGhz9yb8j4gzHCdqN-WVs3wZdE4ID1M',
],

    'facebook' => [
    'client_id' => '155076701700400',
    'client_secret' => '27ae87d8bf49ca79406d96ad0eb3811f',
    'redirect' => 'http://localhost:8000/callback',
],
];
