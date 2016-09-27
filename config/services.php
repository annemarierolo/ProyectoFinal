<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, Mandrill, and others. This file provides a sane
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

    'facebook' => [
        'client_id' => '1308322249180484',
        'client_secret' => '483149354ccae56279336a1b18289e46',
        'redirect' => 'http://localhost:8000/callback/facebook'

    ],

    'twitter' => [
        'client_id' => 'CdtVEstabptVksd8QbALbr5qo',
        'client_secret' => 'Yi6hOXlIXdDc0Gz8dQJ5K0Sj3cwy6iEhITcGkcBdpSY1TNx4lg',
        'redirect' => 'http://localhost:8000/callback/twitter',
    ],


];
