<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Subject;
use Faker\Generator as Faker;

$factory->define(Subject::class, function (Faker $faker) {
    return [
        'subject_name' => $faker->sentence(4, true),
        'subject_description' => $faker->text
    ];
});
