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
        'ungvien' => [
            'driver' => 'jwt',
            'provider' => 'ungvien',
        ],
        'nhatuyendung' => [
            'driver' => 'jwt',
            'provider' => 'nhatuyendung',
        ],

        'api' => [
            'driver' => 'jwt',
            'provider' => 'ungvien',
            'hash' => false,
        ],
    ],

    'providers' => [
        'admin' => [
            'driver' => 'eloquent',
            'model' => App\Models\Admin::class,
        ],
        'ungvien' => [
            'driver' => 'eloquent',
            'model' => App\Models\UngVien::class,
        ],
        'nhatuyendung' => [
            'driver' => 'eloquent',
            'model' => App\Models\NhaTuyenDung::class,
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
