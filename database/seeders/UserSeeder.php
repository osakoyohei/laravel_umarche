<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id' => '1',
            'name' => 'user1',
            'email' => 'user1@user.com',
            'password' => Hash::make('password123'),
            'created_at' => '2021/01/01 11:11:11',
        ]);
    }
}
