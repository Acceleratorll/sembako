<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->insert([
            'user_id' => 3,
            'name' => 'Jorji',
            'address' => 'Jl. Jorji 5',
            'phone' => '+628988879087',
            'city' => 'Surabaya',
            'membership' => 0,
            'front_img' => 'front_img.jpg',
        ]);
    }
}
