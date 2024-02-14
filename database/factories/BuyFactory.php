<?php

namespace Database\Factories;

use App\Models\Call;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Buy>
 */
class BuyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $codigo_llamada = Call::inRandomOrder()->first()->id;

        return [
            'cod_llamada' => $codigo_llamada,
            'numero' => fake()->unique()->randomNumber(8),
            'fecha' => fake()->dateTimeBetween('-1 year', 'now'),
            'medioPago' => fake()->randomElement(['Tarjeta', 'Transferencia']), 
            'pers_autoriz' => fake()->name()
        ];
    }
}
