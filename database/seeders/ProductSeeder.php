<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'id' => '1',
                'shop_id' => '1',
                'secondary_category_id' => 1,
                'image1' => 1,
            ],
            [
                'id' => '2',
                'shop_id' => '1',
                'secondary_category_id' => 2,
                'image1' => 1,
            ],
            [
                'id' => '3',
                'shop_id' => '1',
                'secondary_category_id' => 3,
                'image1' => 1,
            ],
            [
                'id' => '4',
                'shop_id' => '1',
                'secondary_category_id' => 4,
                'image1' => 1,
            ],
            [
                'id' => '5',
                'shop_id' => '1',
                'secondary_category_id' => 5,
                'image1' => 1,
            ],
        ]);
    }
}
