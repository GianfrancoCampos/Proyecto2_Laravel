<?php

namespace Database\Seeders;

use App\Models\Call;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CallSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Call::factory()->count(10)->create();
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
        // $contacts = Contact::all()->pluck('numero_documento')->to;
        // $operadors = Operator::all()->pluck('id');
        
        // foreach($contacts as $contact){
        //     foreach($operadors as $operador){
        //         DB::table('calls')->insert([
        //             'num_doc_contacto' =>  $contact, 
        //             'id_operador'=>  $operador,
        //         ]);
        //     }

        // }

    }
}
