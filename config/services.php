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
		'client_id' => '505424843150632',
		'client_secret' => '867adef7fb732241652380576a6dfbee',
		'redirect' => 'http://demoimg.com/mimessay-demo/facebook/callback',
	],
	'twitter' => [
		'client_id' => '28q5ppdUtcqgM0xotQOG1n549',
		'client_secret' => 'nPOj9JQ7mqq4CdLZJJ08ykf6yXcjp7itWQCBtRyDpjvEAL6zmk',
		'redirect' => 'http://demoimg.com/mimessay-demo/twitter/callback'
	],
	'google' => [
		'client_id' => '247373360039-ujkdho3thsuja9aqg52ehcvko8stff4d.apps.googleusercontent.com',
		'client_secret' => 'OAP4h99GEVGIRZd7U__Ib9w1',
		'redirect' => 'http://demoimg.com/mimessay-demo/google/callback'
	],
	'linkedin' => [
		'client_id' => '819afja5umsy7y',
		'client_secret' => 'tMxDbozu1JLl4a7J',
		'redirect' => 'http://demoimg.com/mimessay-demo/linkedin/callback'
	],

];
