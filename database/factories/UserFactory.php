<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->safeEmail(),
            'password' => Hash::make('123456'), // password
            'remember_token' => Str::random(10),
            'role' => Arr::random(['student', 'admin']),
            'gender' => Arr::random(['male', 'female']),
            'birthday' => fake()->dateTime(),
            'address' => fake()->address(),
            'social_links' => Arr::random([
                'http://facebook.com/'.fake()->userName,
                'http://twitter.com/'.fake()->userName,
                'http://plus.google.com/'.fake()->userName,
            ]),
            'phone' => fake()->phoneNumber(),

        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
