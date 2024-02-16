<?php

namespace Database\Seeders;

use App\Models\Call;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CallSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Call::factory()->count(10)->create();

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
