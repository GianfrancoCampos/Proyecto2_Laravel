<?php

namespace Database\Seeders;

use App\Models\State;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
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
            'descripcion' => 'Reclamo pendiente'
        ]);
        State::create([
            'codigo' => 'R1004',
            'descripcion' => 'Reclamo cerrado'
        ]);
        State::create([
            'codigo' => 'R1005',
            'descripcion' => 'Reclamo reabierto'
        ]);
    }
}
