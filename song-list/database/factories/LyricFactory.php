<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Lyric;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Lyric::class, function (Faker $faker) {
    return [
        'title' => $faker->unique()->realText($maxNbChars = 30),
        'artist' => $faker->unique()->name($gender = null),
        'song_lyrics' => $faker->realText($maxNbChars = 200),
        'created_at' => now(),
        'updated_at' => now(),
    ];
});
