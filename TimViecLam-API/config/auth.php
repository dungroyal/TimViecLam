<?php

return [

    'defaults' => [
        'guard' => 'api',
        'passwords' => 'users',
    ],

    'guards' => [
        'admin' => [
            'driver' => 'jwt',
            'provider' => 'admin',
        ],
        'job_seeker' => [
            'driver' => 'jwt',
            'provider' => 'job_seeker',
        ],
        'employer' => [
            'driver' => 'jwt',
            'provider' => 'employer',
        ],

        'api' => [
            'driver' => 'jwt',
            'provider' => 'job_seeker',
            'hash' => false,
        ],
    ],

    'providers' => [
        'admin' => [
            'driver' => 'eloquent',
            'model' => App\Models\Admin::class,
        ],
        'job_seeker' => [
            'driver' => 'eloquent',
            'model' => App\Models\JobSeeker::class,
        ],
        'employer' => [
            'driver' => 'eloquent',
            'model' => App\Models\Employer::class,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Resetting Passwords
    |--------------------------------------------------------------------------
    */

    'passwords' => [
        'users' => [
            'provider' => 'users',
            'table' => 'password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Password Confirmation Timeout
    |--------------------------------------------------------------------------
    */

    'password_timeout' => 10800,

];
