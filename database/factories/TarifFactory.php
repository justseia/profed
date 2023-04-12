<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tarif>
 */
class TarifFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $tarifs = [
            [
                'title' => [
                    'Вводный курс',
                    '1 ознакомительное видео',
                    'Отсутствует проверка домашних работ',
                ],
                'data' => [
                    'Обзор профессий',
                    'Как выбрать своё русло?',
                    'Жизнь после обучения',
                ],
            ],
        ];
        return [
            'name' => 'Тариф 1',
            'cost' => '10 000 тенге',
            'body' => json_encode($tarifs),
        ];
    }
}
