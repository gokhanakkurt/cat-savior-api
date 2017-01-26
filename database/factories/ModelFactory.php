<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\Models\Post::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->word,
        'description' => $faker->text,
        'image' => $faker->imageUrl
    ];
});

$factory->define(App\Models\PostLocation::class, function (Faker\Generator $faker) {
    return [
        'post_id' => $faker->randomDigit,
        'latitude' => $faker->randomFloat,
        'longitude' => $faker->randomFloat,
        'title' => $faker->title,
    ];
});
