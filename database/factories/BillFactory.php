<?php

namespace Database\Factories;

use App\Models\Buy;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bill>
 */
class BillFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $num_compra =  Buy::all()->pluck('id')->count();
        $valor = fake()->numberBetween(1, $num_compra);
        return [
            'numero_compra' => $valor,
            'numero_factura' => fake()->unique()->randomNumber(4),
        ];
    }
}
