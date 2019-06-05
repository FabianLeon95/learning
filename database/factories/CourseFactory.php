<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */
use App\Course;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(Course::class, function (Faker $faker) {
    $name = $faker->sentence;
    $status = $faker->randomElement([Course::PUBLISHED, Course::PENDING, Course::REJECTED]);
    return [
        'instructor_id' => \App\Instructor::all()->random()->id,
        'category_id' => \App\Category::all()->random()->id,
        'level_id' => \App\Level::all()->random()->id,
        'name' => $name,
        'slug' => Str::slug($name, '-'),
        'description' => $faker->paragraph,
        'picture' => \Faker\Provider\Image::image(storage_path().'/app/public/courses', 600, 350, 'business', false),
        'status' => $status,
        'previous_approved' => $status === Course::PUBLISHED,
        'previous_rejected' => $status === Course::REJECTED
    ];
});
