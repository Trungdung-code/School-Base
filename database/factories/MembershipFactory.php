<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Membership>
 */
class MembershipFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => fake()->numberBetween('1', '10'),
            'subcription_id' => fake()->numberBetween('1', '10'),
            'start_time' => fake()->dateTime(),
            'end_time' => fake()->dateTime(),
            'duration' => fake()->text(),
            'cost' => fake()->numberBetween('10000', '90000'),

        ];
    }
}
