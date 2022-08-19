<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Promotion>
 */
class PromotionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'code' => Str::random(10),
            'time' => fake()->numberBetween('12', '100'),
            'limit' => fake()->numberBetween('10', '100'),
            'start_time' => fake()->dateTime('now'),
            'end_time' => fake()->dateTime('+3year'),

        ];
    }
}
