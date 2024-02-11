<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\State>
 */
class StateFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $numero = fake()->numberBetween(1000,9999);

        $codigo = 'R' . $numero;

        return [
            'codigo' => fake()->unique()->$codigo,
        ];

    }
}
