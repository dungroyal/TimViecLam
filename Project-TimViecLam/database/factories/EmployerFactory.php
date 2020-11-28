<?php

use App\Employer;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

// $factory->define(Employer::class, function (Faker $faker) {
//     return [
//         'name'=> $faker->company,
//         'email'=> $faker->companyEmail,
//         'email_verified_at'=> now(),
//         'password'=> '$2y$10$KBqTqSANnzLpLQnb6PHNou4GBvOSO5fvHwc3fISLL0KGewZdvhkR6', //Mật khẩu: 12345678
//         'remember_token'=> Str::random(10),
//         'phone'=> $faker->e164PhoneNumber,
//         'city'=> $faker->biasedNumberBetween($min = 0, $max = 4, $function = 'sqrt'),
//         'address'=> $faker->address,
//         'province'=> $faker->city,
//         'personnel_size'=> $faker->biasedNumberBetween($min = 0, $max = 5, $function = 'sqrt'),
//         'created_at'=> now(),
//         'updated_at'=> now()
//     ];
// });
