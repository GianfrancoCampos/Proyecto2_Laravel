<?php

namespace Database\Seeders;

use App\Models\Buy;
use App\Models\Call;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BuySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        Buy::factory()->count(10)->create();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
        // La logica la desarrollo de la misma manera que en BillSeeder
        // Esto segun Enrique no deberiamos hacerlo si tuvieramos varios datos, usando el unique de una mejor manera
        $id_sin_asignar_llamadas = Call::select('id')
            ->whereNotIn('id', function ($query) {
                $query->select('cod_llamada')
                    ->from('buys');
            })
            ->first()->id;
        $cod_llamada_sin_id =  Buy::select('id')
            ->whereNotIn('cod_llamada', function ($query) {
                $query->select('id')->from('calls');
            })
            ->get()
            ->pluck('id')
            ->toArray();

        $buys = Buy::all();

        foreach ($buys as $buy) {
            if ($buy->id === $cod_llamada_sin_id[0]) {
                $buy->cod_llamada = $id_sin_asignar_llamadas;
            }
            $buy->save();
        }
    }
}
