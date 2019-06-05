<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Instructor;
use Faker\Generator as Faker;

$factory->define(Instructor::class, function (Faker $faker) {
    return [
        'user_id' => null,
        'title' => $faker->jobTitle,
        'biography' => $faker->paragraph,
        'website_url' => $faker->url
    ];
});
