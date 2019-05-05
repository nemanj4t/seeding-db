<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\RefAddressType;
use Faker\Generator as Faker;

$factory->define(RefAddressType::class, function (Faker $faker) {
    return [
        'address_type_description' => $faker->sentence('3', true)
    ];
});
