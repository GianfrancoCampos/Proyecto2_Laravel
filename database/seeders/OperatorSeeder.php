<?php

namespace Database\Seeders;

use App\Models\Operator;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OperatorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {        
        DB::statement('SET FOREIGN_KEY_CHECKS=0');

        // Truncar la tabla usando el método específico
        Operator::truncate();
    
        // Reactivar las restricciones de clave externa
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    
        // Crear nuevos registros
        Operator::factory()->count(20)->create();

        $operadores = Operator::all();
        $contador = 0;
        foreach ($operadores as $operador) {
            if ($operador->id === 2 || $operador->id === 7) {
                // Si el id es 2 o 7, establece id_coordinador como nulo
                $operador->id_coordinador = null;
            } else {
                if($contador % 2 == 0){
                    $operador->id_coordinador = 2 ;
                }
                else {
                    $operador->id_coordinador = 7;
                }
                $contador++;
            }
        
            // Guarda los cambios en la base de datos
            $operador->save();
        }
        

    }
}
