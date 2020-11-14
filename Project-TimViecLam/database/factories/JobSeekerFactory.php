<?php

use App\JobSeeker;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(JobSeeker::class, function (Faker $faker) {
    return [
        'name'=> $faker->name,
        'email'=> $faker->companyEmail,
        'email_verified_at'=> now(),
        'password'=> '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', //Mật khẩu: 12345678
        'phone'=>$faker->e164PhoneNumber,
        'remember_token'=> Str::random(10),
        'created_at'=> now(),
        'updated_at'=> now(),
    ];
});
