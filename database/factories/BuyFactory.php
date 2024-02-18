<?php

namespace Database\Factories;

use App\Models\Buy;
use App\Models\Call;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

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
        $codigo_llamada = Call::pluck('id')->toArray();
        return [
            'cod_llamada' => fake()->unique()->randomDigit(),
            'numero' => fake()->phoneNumber(),
            'fecha' => fake()->dateTimeBetween('-1 year', 'now'),
            'medioPago' => fake()->randomElement(['Tarjeta', 'Transferencia']), 
            'pers_autoriz' => fake()->name()
        ];


    }
}