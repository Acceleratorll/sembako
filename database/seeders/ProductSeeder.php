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
            'store_id' => 1,
            'name' => 'Milo',
            'qty' => 100,
            'price' => 10000,
            'desc' => 'Minuman yang menyegarkan dari Nestle',
            'img' => 'product_img.jpg',
        ]);
    }
}
