<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Nette\Utils\Random;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Question>
 */
class QuestionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake()->text(),
            'options' => json_encode([
                fake()->numberBetween('1', '4'),
            ]),
            'correct_answer' => fake()->numberBetween('1','4'),
            'point' => fake()->numberBetween('1','100'),
            'explaination' => fake()->text(),
            'level' => fake()->text(255),
            'question_block_id' => fake()->numberBetween('1','10'),
            'hint' => fake()->text(),

        ];
    }
}
