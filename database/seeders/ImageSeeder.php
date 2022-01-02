<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->insert([
            [
                'id' => '1',
                'owner_id' => '1',
                'filename' => 'no_image.jpg',
                'title' => null,
            ],
        ]);
    }
}
