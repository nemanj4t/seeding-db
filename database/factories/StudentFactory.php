<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Student;
use Faker\Generator as Faker;

$factory->define(Student::class, function (Faker $faker) {
    return [
        'gender' => $gender = $faker->randomElement(['male', 'female']),
        'first_name' => $faker->firstName($gender),
        'middle_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'cell_mobile_number' => $faker->phoneNumber,
        'email_address' => $faker->email,
        'date_first_rental' => $before = $faker->dateTime,
        'date_left_university' => $faker->dateTimeInInterval($before, '+10 years')
     ];
});
