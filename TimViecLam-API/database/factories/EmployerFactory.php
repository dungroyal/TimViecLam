<?php

use App\Models\Employer;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use Buihuycuong\Vnfaker\VNFaker;

$factory->define(Employer::class, function (Faker $faker) {
    return [
        'name'=> vnfaker()->company(),
        'email'=> vnfaker()->email(),
        'email_verified_at'=> now(),
        'password'=> '$2y$10$HzpjWmhiEJLXrT53ZQMIOOnyj2HDO03rkGOrssTIDK/yYPpSIxJNi', //Mật khẩu: 1
        'remember_token'=> Str::random(10),
        'phone'=> vnfaker()->mobilephone($numbers = 10),
        'area'=> $faker->biasedNumberBetween($min = 0, $max = 4, $function = 'sqrt'),
        'address'=> $faker->address,
        'province'=> vnfaker()->city(),
        'personnel_size'=> $faker->biasedNumberBetween($min = 0, $max = 5, $function = 'sqrt'),
        'created_at'=> now(),
        'updated_at'=> now()
    ];
});
