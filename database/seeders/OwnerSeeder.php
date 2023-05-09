<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            'user_id' => 2,
            'name' => 'Louis',
            'address' => 'Jl. Louishef 3',
            'phone' => '+6281233333',
            'city' => 'Malang',
            'front_img' => 'front_img.jpg',
        ]);
    }
}
