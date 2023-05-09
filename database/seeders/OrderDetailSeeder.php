<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('order_details')->insert([
            'store_id' => 1,
            'customer_id' => 1,
            'shipping_id' => 1,
            'payment_id' => 1,
            'ppn' => 2500,
            'discount' => 0.1,
            'total' => 100000,
        ]);
    }
}
