<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Requirements;
use Faker\Generator as Faker;

$factory->define(Requirements::class, function (Faker $faker) {
    return [
        'course_id' => \App\Course::all()->random()->id,
        'description' => $faker->sentence
    ];
});
