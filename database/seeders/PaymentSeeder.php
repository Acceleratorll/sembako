<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('payments')->insert([
            'method' => 'GoPay',
            'amount' => 2500,
        ]);

        DB::table('payments')->insert([
            'method' => 'Debit',
            'amount' => 2500,
        ]);

        DB::table('payments')->insert([
            'method' => 'ShopeePay',
            'amount' => 2500,
        ]);
    }
}
