<?php

use Illuminate\Support\Str;
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

$factory->define(App\Models\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt($faker->email),
        'remember_token' => Str::random(10),
        'role' => \App\Models\User::ROLE_STUDENT,
        'gender' => $faker->randomElement(['male', 'female', 'unknown']),
        'birthday' => $faker->dateTimeBetween('-40 years', '-15 years'),
        'address' => $faker->address,
        'social_links' => json_encode([
          'facebook' => 'http://facebook.com/'.$faker->userName,
          'twitter' => 'http://twitter.com/'.$faker->userName,
          'google_plus' => 'http://plus.google.com/'.$faker->userName,
        ]),
    ];
});

$factory->define(App\Models\Resource::class, function (Faker\Generator $faker) {

    return [
        'path' => $faker->imageUrl(),
        'properties' => json_encode([
            'originalName' => $faker->name,
            'ext' => $faker->randomElement(['png', 'jpg', 'gif']),
            'size' => 300
        ]),
    ];
});
