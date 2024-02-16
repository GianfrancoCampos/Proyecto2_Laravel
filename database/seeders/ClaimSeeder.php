<?php

namespace Database\Seeders;

use App\Models\Claim;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClaimSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        Claim::factory()->count(10)->create();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
