<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\PropertyOwner;
use Faker\Generator as Faker;

$factory->define(PropertyOwner::class, function (Faker $faker) {
    return [
        'property_owner_name' => $faker->name,
        'date_first_rental' => $faker->dateTime
    ];
});
