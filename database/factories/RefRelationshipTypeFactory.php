<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\RefRelationshipType;
use Faker\Generator as Faker;

$factory->define(RefRelationshipType::class, function (Faker $faker) {
    return [
        'relationship_type_description' => $faker->randomElement(['mother', 'father'])
    ];
});
