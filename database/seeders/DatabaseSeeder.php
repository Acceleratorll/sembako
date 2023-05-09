<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            OwnerSeeder::class,
            StoreSeeder::class,
            CategorySeeder::class,
            ProductSeeder::class,
            CustomerSeeder::class,
            CategoryProductSeeder::class,
            PaymentSeeder::class,
            ShippingSeeder::class,
            OrderDetailSeeder::class,
            OrderProductSeeder::class,
        ]);
    }
}
