<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\StudentSubject;
use Faker\Generator as Faker;

$factory->define(StudentSubject::class, function (Faker $faker) {
    return [
        'date_of_registration' => $faker->dateTime,
        'date_of_first_class' => $faker->dateTime,
        'date_of_last_class' => $faker->dateTime,
    ];
});
