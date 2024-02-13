<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Contact;
use App\Models\Operator;

use App\Models\Operator;
use App\Models\Product;
use Database\Factories\OperatorFactory;
use Database\Factories\ProductFactory;

use App\Models\Contact;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        $this->call(OperatorSeeder::class);
        $this->call(ContactSeeder::class);
        $this->call(CallSeeder::class);

    }
}
