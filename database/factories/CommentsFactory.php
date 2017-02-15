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

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Comment::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'content' => $faker->realText($maxNbChars = 100, $indexSize = 2),
        'user_id' => App\User::all()->random()->id,
        'post_id' => App\Post::all()->random()->id,
        'score' => $faker->randomDigitNotNull,
    ];
});
