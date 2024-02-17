<?php

namespace Database\Seeders;

use App\Models\State;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        State::create([
            'codigo' => 'R1001',
            'descripcion' => 'Reclamo abierto'
        ]);
        State::create([
            'codigo' => 'R1002',
            'descripcion' => 'Proceso de resolucion'
        ]);
        State::create([
            'codigo' => 'R1003',
            'descripcion' => 'Sin analizar'
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
