<?php

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
         $this->call(StaffSeeder::class);
         $this->call(ManagerSeeder::class);
         $this->call(ShoesSeeder::class);
         $this->call(PaymentSeeder::class);
    }
}
