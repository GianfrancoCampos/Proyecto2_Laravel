<?php

namespace Database\Seeders;

use App\Models\Buy;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BuySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Buy::factory()->count(10)->create();
    }
}
