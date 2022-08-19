<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ExamUser>
 */
class ExamUserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => fake()->numberBetween('1','10'),
            'exam_id' => fake()->numberBetween('1','10'),
            'start_time' => fake()->dateTime(),
            'end_time' => fake()->dateTime(),
            'duration' => fake()->text(),
            'point' => fake()->numberBetween('1','100'),
            'batch' =>fake()->numberBetween('1','10'),

        ];
    }
}
