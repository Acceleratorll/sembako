<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            'role_id' => 1,
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => 'password',
        ]);

        DB::table('users')->insert([
            'role_id' => 3,
            'username' => 'owner',
            'email' => 'owner@gmail.com',
            'password' => 'password',
        ]);

        DB::table('users')->insert([
            'role_id' => 2,
            'username' => 'customer',
            'email' => 'customer@gmail.com',
            'password' => 'password',
        ]);
    }
}
