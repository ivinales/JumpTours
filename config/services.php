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
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'google' => [
        'client_id' => '611204398239-eoqurchrkanomc6mr5m9b04m2uc4phce.apps.googleusercontent.com',
        'client_secret' => '7hua3wSI2Z_mXcAZXgudXqJz',
        'redirect' => 'http://localhost:8000/callback/google',
      ], 
      'facebook' => [
        'client_id' => '269029434378430',
        'client_secret' => '5b04dfe7d6687cecc2f6ee136d65f532',
        'redirect' => 'http://localhost:8000/callback/facebook',
      ], 

];
