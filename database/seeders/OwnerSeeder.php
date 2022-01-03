<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class OwnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('owners')->insert([
            [
                'id' => '1',
                'name' => 'owner',
                'email' => 'owner@owner.com',
                'password' => Hash::make('password123'),
                'created_at' => '2021/01/01 11:11:11',
            ],
            [
                'id' => '2',
                'name' => 'owner2',
                'email' => 'owner2@owner.com',
                'password' => Hash::make('password123'),
                'created_at' => '2021/01/01 11:11:11',
            ],
            [
                'id' => '3',
                'name' => 'owner3',
                'email' => 'owner3@owner.com',
                'password' => Hash::make('password123'),
                'created_at' => '2021/01/01 11:11:11',
            ],
            [
                'id' => '4',
                'name' => 'owner4',
                'email' => 'owner4@owner.com',
                'password' => Hash::make('password123'),
                'created_at' => '2021/01/01 11:11:11',
            ],
            [
                'id' => '5',
                'name' => 'owner5',
                'email' => 'owner5@owner.com',
                'password' => Hash::make('password123'),
                'created_at' => '2021/01/01 11:11:11',
            ],
            [
                'id' => '6',
                'name' => 'owner6',
                'email' => 'owner6@owner.com',
                'password' => Hash::make('password123'),
                'created_at' => '2021/01/01 11:11:11',
            ],
        ]);
    }
}
