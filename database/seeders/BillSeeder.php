<?php

namespace Database\Seeders;

use App\Models\Bill;
use App\Models\Buy;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        Bill::factory()->count(10)->create();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');

        $facturas = Bill::all();
        // select numero_compra from bills where numero_compra not in (select id from buys)
        $numero_compra_sin_id = Bill::whereNotIn('numero_compra', function ($query) {
            $query->select('id')->from('buys');
        })->pluck('numero_compra');
        // select id from buys where id not in (select numero_compra from bills)
        $idsNoEnBills = Buy::whereNotIn('id', function ($query) {
            $query->select('numero_compra')->from('bills');
        })->pluck('id');
        foreach ($facturas as $factura) {
            if($factura->numero_compra === $numero_compra_sin_id[0]){
                $factura->numero_compra = $idsNoEnBills[0];
            }
            $factura->save();
        }

        // $id_compra = Buy::select('id')->from('buys')->pluck('id')->toArray();
        // $id_factura = Bill::select('id')->from('bills')->pluck('id')->toArray();
        // for ($i = 0; $i < 10; $i++) {
        //     $id_no_usados = array_diff($id_compra, $id_factura);
        //     $valor = $id_no_usados[array_rand($id_no_usados)];
        //     Bill::create([
        //         'numero_compra' => $valor,
        //         'numero_factura' => fake()->unique()->randomNumber(4)
        //     ]);
        // }
    }
}
