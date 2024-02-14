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

        $operadoresIds = Operator::pluck('id');
        $cont_id_oper = $operadoresIds->count();
        $numeroRandom = rand(1, $cont_id_oper);
        $id_oper = Junior::pluck('operator_id');

        for ($i = 0; $i < count($id_oper); $i++) {
            if ($id_oper[$i] === $operadoresIds[$numeroRandom - 1]) {
                $numeroRandom = rand(1, $cont_id_oper);
                $i = -1;  
            }
        }



        // $fecha_ingreso = $operadores->fecha_ingreso;
        // $fecha_actual = date('now');
        // $diferencia = $fecha_actual-$fecha_ingreso;
        // 'operator_id' => fake()->numberBetween(1, $operadores->count())
        $numero = 5;
        return [
            'operator_id' => $numeroRandom,
            'antiguedad' => fake()->date()
        ];
    }
}
