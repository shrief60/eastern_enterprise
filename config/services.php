<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
        'scheme' => 'https',
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'alphavantage' => [
        'url' => env('NASDAQ_SCREENER_URL', 'https://www.alphavantage.co/query'),
        'key' => env('NASDAQ_SCREENER_KEY', 'ME07D4IZ0POA8ZM4'),
    ],
    
    'iex' => [
        'url' => env('IEX_REALTIME_URL', 'https://cloud.iexapis.com'),
        'key' => env('IEX_REALTIME_KEY', 'pk_f559d2583d404e9e8f7288cc2e1e55df') 
    ]

];
