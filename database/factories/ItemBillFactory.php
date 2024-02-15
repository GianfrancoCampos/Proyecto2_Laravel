<?php

namespace Database\Factories;

use App\Models\Bill;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ItemBill>
 */
class ItemBillFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $num_factura = Bill::inRandomOrder()->first()->id;
        $codigo_compra = Product::inRandomOrder()->first()->id;

        return [
            'numero_factura' => $num_factura,
            'codigo_producto' => $codigo_compra,
            'item' => fake()->unique()->numerify('#######'),
            'cantidad' => fake()->randomNumber(3),
        ];
    }
}
