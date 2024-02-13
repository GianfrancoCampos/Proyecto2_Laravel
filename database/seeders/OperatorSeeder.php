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
        Operator::factory()->count(10)->create();

        $operadores = Operator::all();
        foreach ($operadores as $operador) {
            if ($operador->id === 2 || $operador->id === 7) {
                // Si el id es 2 o 7, establece id_coordinador como nulo
                $operador->id_coordinador = null;
            } else {
                // Si no es 2 ni 7, asigna un coordinador aleatorio
                $coordinadorAleatorio = $operadores->where('id', '!=', $operador->id)->random();
                $operador->id_coordinador = $coordinadorAleatorio->id;
            }
        
            // Guarda los cambios en la base de datos
            $operador->save();
        }
        

    }
}
