<?php

namespace Database\Seeders;

use App\Models\itemBill;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ItemBillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        itemBill::factory()->count(20)->create();
    }
}
