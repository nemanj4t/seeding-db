<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Address;
use Faker\Generator as Faker;

$factory->define(Address::class, function (Faker $faker) {
    return [
        'line_1_number_building' => $faker->randomDigit,
        'line_2_number_street' => $faker->randomDigit,
        'line_3_number_locality' => $faker->randomDigit,
        'city' => $faker->city,
        'zip_postcode' => $faker->postcode,
        'state_province_county' => $faker->countryCode,
        'country' => $faker->country
    ];
});
