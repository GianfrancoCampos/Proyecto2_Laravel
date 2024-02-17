<?php

namespace Database\Seeders;

use App\Models\Bill;
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
        Bill::factory()->count(30)->create();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
