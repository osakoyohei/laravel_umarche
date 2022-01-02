<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shops')->insert([
            [
                'id' => '1',
                'owner_id' => '1',
                'name' => 'ここに店名が入ります。',
                'information' => 'ここに店名の情報が入ります。',
                'filename' => 'no_image.jpg',
                'is_selling' => true,
            ],
            [
                'id' => '2',
                'owner_id' => '2',
                'name' => 'ここに店名が入ります。',
                'information' => 'ここに店名の情報が入ります。',
                'filename' => 'no_image.jpg',
                'is_selling' => true,
            ],
            [
                'id' => '3',
                'owner_id' => '3',
                'name' => 'ここに店名が入ります。',
                'information' => 'ここに店名の情報が入ります。',
                'filename' => 'no_image.jpg',
                'is_selling' => true,
            ],
            [
                'id' => '4',
                'owner_id' => '4',
                'name' => 'ここに店名が入ります。',
                'information' => 'ここに店名の情報が入ります。',
                'filename' => 'no_image.jpg',
                'is_selling' => true,
            ],
            [
                'id' => '5',
                'owner_id' => '5',
                'name' => 'ここに店名が入ります。',
                'information' => 'ここに店名の情報が入ります。',
                'filename' => 'no_image.jpg',
                'is_selling' => true,
            ],
            [
                'id' => '6',
                'owner_id' => '6',
                'name' => 'ここに店名が入ります。',
                'information' => 'ここに店名の情報が入ります。',
                'filename' => 'no_image.jpg',
                'is_selling' => true,
            ],
        ]);
    }
}
