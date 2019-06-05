<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    return [
        'name' => $faker->randomElement(['PHP','Java', 'Web Design', 'Servers', 'MySQL', 'NoSQL']),
        'description' => $faker->sentence
    ];
});
