<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Bill;
use App\Models\Buy;
use App\Models\Claim;
use App\Models\Comment;
use App\Models\Contact;
use App\Models\itemBill;
use App\Models\Operator;
use App\Models\State;
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
        $this->call(JuniorSeeder::class);
        $this->call(CallSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(BuySeeder::class);
        $this->call(SeniorSeeder::class);
        $this->call(StateSeeder::class);
        $this->call(ClaimSeeder::class);
        $this->call(BillSeeder::class);
        $this->call(itemBillSeeder::class);
        $this->call(CommentSeeder::class);

    }
}
