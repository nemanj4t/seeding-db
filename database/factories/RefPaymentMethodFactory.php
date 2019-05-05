<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\RefPaymentMethod;
use Faker\Generator as Faker;

$factory->define(RefPaymentMethod::class, function (Faker $faker) {
    return [
        'payment_method_description' => $faker->sentence(3, true)
    ];
});
