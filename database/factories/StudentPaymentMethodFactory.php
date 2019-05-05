<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\StudentPaymentMethod;
use Faker\Generator as Faker;

$factory->define(StudentPaymentMethod::class, function (Faker $faker) {
    return [
        'payment_method_code' => $faker->numberBetween(1, App\RefPaymentMethod::all()->count()),
        'bank_details' => $faker->sentence,
        'card_details' => $faker->sentence
    ];
});
