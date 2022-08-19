<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Transaction>
 */
class TransactionFactory extends Factory
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
            'promotion_id' => fake()->numberBetween('1', '10'),
            'discount_code' => Str::random(10),
            'price' => fake()->numberBetween('19.000', '100.000'),
            'discount' => fake()->numberBetween('19.000', '100.000'),
            'total' => fake()->numberBetween('20.000', '150.000'),

        ];
    }
}
