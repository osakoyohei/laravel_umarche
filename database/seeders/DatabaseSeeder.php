<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Product; use App\Models\Stock;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $this->call([
            UserSeeder::class,
            AdminSeeder::class,
            OwnerSeeder::class,
            CategorySeeder::class,
            ShopSeeder::class,
            // ImageSeeder::class,
            // ProductSeeder::class,
            // StockSeeder::class,
        ]);
        // \App\Models\Product::factory(100)->create();
        // \App\Models\Stock::factory(100)->create();
    }
}
