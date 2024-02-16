<?php

namespace Database\Seeders;

use App\Models\Junior;
use App\Models\Operator;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JuniorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Junior::factory(10)->create();
        
        

    }
}
