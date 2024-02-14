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

        // $num_compra = Buy::inRandomOrder()->first()->id;
        return [
            // 'numero_compra' => fake()->unique()->numberBetween(1,10),
            // 'numero_factura' => fake()->unique()->randomNumber(4),
        ];
    }
}
