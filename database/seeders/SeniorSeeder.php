<?php

namespace Database\Seeders;

use App\Models\Senior;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SeniorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Senior::factory(10)->create();
    }
}
