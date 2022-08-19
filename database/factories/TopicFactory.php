<?php

namespace Database\Factories;

use App\Models\Topic;
use Faker\Core\Number;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Topic>
 */
class TopicFactory extends Factory
{
    protected $model = Topic::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->name(),
            'subject_id' => fake()->numberBetween('1', '10'),
            'user_id' => fake()->numberBetween('1', '10'),

        ];
    }
}
