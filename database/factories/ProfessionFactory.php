<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Profession>
 */
class ProfessionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $description = [
            ['body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus animi autem corporis dolor dolorum ducimus explicabo ipsum itaque natus omnis pariatur quo, recusandae, reiciendis rem repellendus sapiente similique sunt tempore!'],
            ['body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus animi autem corporis dolor dolorum ducimus explicabo ipsum itaque natus omnis pariatur quo, recusandae, reiciendis rem repellendus sapiente similique sunt tempore!'],
            ['body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus animi autem corporis dolor dolorum ducimus explicabo ipsum itaque natus omnis pariatur quo, recusandae, reiciendis rem repellendus sapiente similique sunt tempore!'],
        ];
        return [
            'name' => fake()->name(),
            'body' => fake()->paragraph(),
            'description' => json_encode($description),
            'image' => fake()->imageUrl(300, 300),
            'salary' => '400 000 тенге',
        ];
    }
}
