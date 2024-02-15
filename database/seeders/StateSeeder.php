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
        State::created([
            'codigo' => 'R1001',
            'descripcion' => 'Reclamo abierto'
        ]);
        State::created([
            'codigo' => 'R1002',
            'descripcion' => 'Proceso de resolucion'
        ]);
        State::created([
            'codigo' => 'R1003',
            'descripcion' => 'Reclamo pendiente'
        ]);
        State::created([
            'codigo' => 'R1004',
            'descripcion' => 'Reclamo cerrado'
        ]);
        State::created([
            'codigo' => 'R1005',
            'descripcion' => 'Reclamo reabierto'
        ]);
    }
}
