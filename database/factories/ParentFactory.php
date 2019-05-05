<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Parents;
use App\Address;
use Faker\Generator as Faker;

$factory->define(Parents::class, function (Faker $faker) {
    return [
        'address_id' => Address::inRandomOrder()->first()->id,
        'gender' => $gender = $faker->randomElement(['male', 'female']),
        'first_name' => $faker->firstName($gender),
        'middle_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'cell_mobile_number' => $faker->phoneNumber,
        'email_address' => $faker->email
    ];
});
