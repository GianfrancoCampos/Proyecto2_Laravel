<?php

namespace Database\Factories;

use App\Models\Junior;
use App\Models\Operator;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Testing\Fakes\Fake;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Junior>
 */
class JuniorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        // $operator_id = Operator::all()->pluck('id')->toArray();
        $id_operador = Operator::inRandomOrder()->first()->id;

        $operadores = Operator::all();

        foreach ($operadores as $operador) {
            if ($operador->id === $id_operador || $operador->id === $id_operador) {
                // Si el id es 2 o 7, establece id_coordinador como nulo
                $operador->id_coordinador = null;
            } else {
                // Si no es 2 ni 7, asigna un coordinador aleatorio
                $coordinadorAleatorio = $operadores->where('id', '!=', $operador->id)->random();
                $operador->id_coordinador = $coordinadorAleatorio->id;
            }
        
           
        }

        return [
            // 'operator_id' => fake()->randomElement($condicion),
            'antiguedad' => fake()->randomElement(range(1,5)) . ' años' 
        ];
    }
}
