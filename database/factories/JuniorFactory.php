<?php

namespace Database\Factories;

use App\Models\Junior;
use App\Models\Operator;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Testing\Fakes\Fake;
use PHPUnit\TextUI\XmlConfiguration\Logging\Junit;
use Illuminate\Support\Facades\Cache;

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

        $numero_operadores =  Operator::all()->pluck('id')->count();
        $valor = fake()->unique()->numberBetween(1, $numero_operadores);
        $antiguedad = Operator::selectRaw('CONCAT(
            TIMESTAMPDIFF(YEAR, fecha_ingreso, NOW()), 
            " años con ", 
            TIMESTAMPDIFF(MONTH, fecha_ingreso, NOW()) % 12, 
            " meses"
        ) AS antiguedad')
            ->where('id', $valor)
            ->pluck('antiguedad')->first(); //first(), devuelve la primera fila de la consulta, esto es porque si no el texto le da de una manera rara
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
