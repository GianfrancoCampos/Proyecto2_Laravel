<?php

namespace Database\Factories;

use App\Models\Junior;
use App\Models\Operator;
use Exception;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;
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
        /**
         * ¡Nos costo mucho hacer esta clave foranea!
         */
        // $operador_id_existente = Operator::whereIn('id', function ($query) {
        //     $query->select('operator_id')
        //         ->from('juniors');
        // })->pluck('id')->toArray();
        // // $operadores_insertar = array();
        // // for ($i = 1; $i <= $numero_operadores; $i++) {
        // //     array_push($operadores_insertar, $i);
        // // }
        // // $operadores_usar = array_diff($operadores_insertar, $operador_id_existente);
        // // $valor = end($operadores_usar);
        // $valor = 1;
        // $contador = Junior::where('operator_id', $valor)->count();
        // while ($contador != 0) {
        //     $valor = 2;
        //     $contador = Junior::where('operator_id', $valor)->count();
        // }
        // $aleatoriosIngresados = array();
        // $numeroAleatorio = rand(1, $numero_operadores); // Genera un número aleatorio entre 1 y $maximo
        // $valor = $numeroAleatorio;
        // while (in_array($valor, $operador_id_existente)) {
        //     $valor =  rand(1, $numero_operadores);

        // }
        // $auxiliar = $valor;
        // array_push($aleatoriosIngresados, $auxiliar);
        // Obtener todos los IDs de los operadores existentes en juniors
        // $fecha_ingreso = $operadores->fecha_ingreso;
        // $fecha_actual = date('now');
        // $diferencia = $fecha_actual-$fecha_ingreso;
        // 'operator_id' => fake()->numberBetween(1, $operadores->count())
        $numero_operadores =  Operator::all()->pluck('id')->count();
        $valor = fake()->unique()->numberBetween(1, $numero_operadores);
        $antiguedad = Operator::selectRaw('CONCAT(
            TIMESTAMPDIFF(YEAR, fecha_ingreso, NOW()), 
            " años con ", 
            TIMESTAMPDIFF(MONTH, fecha_ingreso, NOW()) % 12, 
            " meses"
        ) AS antiguedad')
            ->where('id', $valor)
            ->pluck('antiguedad')->first();//first(), devuelve la primera fila de la consulta, esto es porque si no el texto le da de una manera rara
        // Este metodo viene de una consulta en sql la cual esta adaptada en eloquent
        // La consulta fue la siguiente:
        /* SELECT 
            CONCAT(TIMESTAMPDIFF(YEAR, fecha_ingreso, NOW()), " AÑOS CON ", TIMESTAMPDIFF(MONTH, fecha_ingreso, NOW()) % 12, " MESES") AS años_transcurridos
        FROM operators WHERE id in (select operator_id from juniors where operator_id = alguna_variable);*/
        // La anterior es una consulta con una subconsulta, no se me ocurrio de otra manera
        return [
            'operator_id' => $valor,
            'antiguedad' => $antiguedad
        ];
    }
}
