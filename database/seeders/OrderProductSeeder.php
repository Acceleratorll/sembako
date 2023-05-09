<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('order_products')->insert([
            'order_detail_id' => 1,
            'product_id' => 1,
            'qty' => 10,
            'total' => 10000,
        ]);
    }
}
