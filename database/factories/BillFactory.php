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
        $id_compra = Buy::select('id')->from('buys')->pluck('id')->toArray();
        return [
            'numero_compra' => fake()->unique()->randomNumber($id_compra),
            'numero_factura' => fake()->unique()->randomNumber(4)
        ];
    }
}
