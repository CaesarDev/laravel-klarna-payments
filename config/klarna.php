<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Klarna API Credentials
    |--------------------------------------------------------------------------
    |
    | Here you may specify your Klarna API credentials. These are required
    | to communicate with Klarna's API servers. Make sure to keep these
    | credentials secure and not expose them in your version control.
    |
    */

    'username' => env('KLARNA_USERNAME', 'your-klarna-username'),
    'password' => env('KLARNA_PASSWORD', 'your-klarna-password'),

    /*
    |--------------------------------------------------------------------------
    | Klarna API Endpoint
    |--------------------------------------------------------------------------
    |
    | This is the base URL for the Klarna API. You might have different URLs
    | depending on whether you are in a testing environment or production.
    |
    */

    'api_endpoint' => env('KLARNA_API_ENDPOINT', 'https://api.klarna.com'),

    /*
    |--------------------------------------------------------------------------
    | Payment Methods
    |--------------------------------------------------------------------------
    |
    | If you need to restrict or configure specific payment methods or behaviors,
    | specify them here. This section is optional and can be tailored to the
    | specific needs of your application.
    |
    */

    'payment_methods' => [
        'pay_later' => true,
        'pay_now' => true,
        'pay_over_time' => true,
    ],

    /*
    |--------------------------------------------------------------------------
    | Locale and Currency
    |--------------------------------------------------------------------------
    |
    | Default locale and currency settings for the Klarna payments. These can
    | be dynamically adjusted per payment request if needed but will fall back
    | to these defaults.
    |
    */

    'locale' => 'en-US',
    'currency' => 'USD',
];
