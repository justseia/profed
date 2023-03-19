<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\University>
 */
class UniversityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'full_info' => fake()->paragraph(),
            'type' => fake()->numberBetween(1, 2),
            'profession_id' => fake()->numberBetween(1, 2),
        ];
    }
}
