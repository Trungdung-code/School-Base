<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Subcription>
 */
class SubcriptionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake()->paragraph(1),
            'description' => fake()->text(),
            'price' => fake()->numberBetween('10', '10000'),
            'duration' => fake()->text(),

        ];
    }
}
