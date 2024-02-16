<?php

namespace Database\Factories;

use App\Models\Call;
use App\Models\Claim;
use App\Models\itemBill;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $numero_llamadas = Call::count();
        $valor = $this->faker->unique()->numberBetween(1, $numero_llamadas);
        $num_reclamo = Claim::pluck('numero')->toArray();
        $item_producto = itemBill::pluck('item')->toArray();
        return [
            'cod_llamada' =>$valor,
            'num_reclamo' => fake()->randomElement($num_reclamo),
            'item' => fake()->unique()->randomElement($item_producto),
            'texto' => fake()->sentence(10)
        ];
    }
}
