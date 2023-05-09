<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stores')->insert([
            'owner_id' => 1,
            'name' => 'Daily Sembako',
            'address' => 'Jl. Sudimulyo 12',
            'city' => 'Malang',
            'slogan' => 'Cheap way to eat',
            'front_img' => 'front_img.jpg',
            'banner_img' => 'banner img.jpg',
            'wallet' => 0,
            'phone' => '08783724901247',
            'email' => 'sembako@daily.com',
        ]);
    }
}
