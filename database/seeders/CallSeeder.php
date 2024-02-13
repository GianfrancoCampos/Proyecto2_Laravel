<?php

namespace Database\Seeders;

use App\Models\Call;
use App\Models\Contact;
use App\Models\Operator;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use illuminate\Support\Facades\DB;

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
