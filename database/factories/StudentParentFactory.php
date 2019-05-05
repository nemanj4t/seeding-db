<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\StudentParent;
use App\Parents;
use Faker\Generator as Faker;

$factory->define(StudentParent::class, function (Faker $faker) {
    return [
        'parent_id' => $parent = Parents::inRandomOrder()->first()->id,
        'relationship_type_code' => Parents::find($parent)->gender === 'male' ? 'father' : 'mother'
    ];
});
