<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Goals;
use Faker\Generator as Faker;

$factory->define(Goals::class, function (Faker $faker) {
    return [
        'course_id' => \App\Course::all()->random()->id,
        'description' => $faker->sentence
    ];
});
