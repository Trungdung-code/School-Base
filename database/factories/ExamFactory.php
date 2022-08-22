<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Exam>
 */
class ExamFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'examable_id' => fake()->numberBetween('1', '10'),
            'examable_type' => fake()->numberBetween('1', '10'),
            'title' => fake()->paragraph(1),
            'description' => fake()->text(),
            'start_time' => fake()->dateTime(),
            'end_time' => fake()->dateTime(),
            'duration' => fake()->text(),
            'point' => fake()->numberBetween('10', '10000'),
            'level' => fake()->text(),
            'user_id' => fake()->numberBetween('1', '10'),

        ];
    }
}
