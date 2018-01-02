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

    'google' => [
      'client_id' => '70899433614-h4to435p02j7lgmct7e91lbldjlh5q9o.apps.googleusercontent.com',
      'client_secret' => '1cAsYkEAPxVhOWuvr55B6yt8',
      'redirect' => 'http://127.0.0.1:8000/login/google/callback',
    ],

    'facebook' => [
      'client_id' => '148573945752201',
      'client_secret' => '59724ed09f8804f5d26569625ee8d5df',
      'redirect' => 'http://127.0.0.1:8000/login/facebook/callback',
    ],


];
