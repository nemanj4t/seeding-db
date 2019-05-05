<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\StudentAddress;
use App\Address;
use Faker\Generator as Faker;

$factory->define(StudentAddress::class, function (Faker $faker) {
    return [
        'address_id' => Address::inRandomOrder()->first()->id,
        'address_type_code' => $faker->numberBetween(1, App\RefAddressType::all()->count()),
        'date_address_from' => $faker->dateTime,
        'date_address_to' => $faker->dateTime,
        'monthly_rental' => $faker->numberBetween(100, 500)
    ];
});
