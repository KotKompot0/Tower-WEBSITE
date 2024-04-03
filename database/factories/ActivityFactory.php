<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class ActivityFactory extends Factory
{

    protected static ?string $password;

    public function definition(): array
    {
        return [
            'title' => fake()->unique()->numerify('Активность-###'),
            'description' => [
                [
                    'title' => fake()->unique()->numerify('Заголовок-###'),
                    'content' => fake()->text(50),
                ],
                [
                    'title' => fake()->unique()->numerify('Заголовок-###'),
                    'content' => fake()->text(50),
                ],
            ],
            'photo_preview' => fake()->imageUrl(),
            'photo_round' => fake()->imageUrl(),
            'icon' => fake()->imageUrl(),
        ];
    }

}
