<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserAnswer>
 */
class UserAnswerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'exam_user_id' => fake()->numberBetween('1','10'),
            'question_id' => fake()->numberBetween('1','10'),
            'answer' => fake()->numberBetween('1','10'),
            'result' => fake()->numberBetween('1','10'),
            'point' => fake()->numberBetween('1','10'),

        ];
    }
}
