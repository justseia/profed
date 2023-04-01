<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class TestFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $body = [
            'body' => ['body', 'body', 'body', 'body'],
        ];

        return [
            'question' => fake()->name(),
            'body' => json_encode($body),
        ];
    }
}
