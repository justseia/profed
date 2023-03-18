<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $categories = [
            ['name' => 'IT'],
            ['name' => 'программирование'],
        ];
        $topic = [
            [
                'title' => 'Раздел 1. Знакомство c JavaScript',
                'body' => 'Рассмотрим схему работы на курсе, какие инструменты понадобятся, и как их настроить. Разберём, что представляет собой язык JavaScript, причём здесь спецификация ECMAScript и браузер.',
                'data' => [],
            ],
            [
                'title' => 'Раздел 2. Основные возможности JavaScript',
                'body' => 'Рассмотрим схему работы на курсе, какие инструменты понадобятся, и как их настроить. Разберём, что представляет собой язык JavaScript, причём здесь спецификация ECMAScript и браузер.',
                'data' => [],
            ],
            [
                'title' => 'Раздел 3. Объекты и массивы',
                'body' => 'Рассмотрим схему работы на курсе, какие инструменты понадобятся, и как их настроить. Разберём, что представляет собой язык JavaScript, причём здесь спецификация ECMAScript и браузер.',
                'data' => [],
            ],
        ];
        return [
            'name' => 'JavaScript. Профессиональная разработка веб-интерфейсов',
            'image' => fake()->imageUrl(300, 300, null, false, null),
            'category' => json_encode($categories),
            'duration' => 'длительность: 9 недель',
            'topic' => json_encode($topic),
            'user_id' => fake()->numberBetween(1, 10),
        ];
    }
}
