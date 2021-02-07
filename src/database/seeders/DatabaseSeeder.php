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
        $this->call(TariffsSeeder::class);
        $this->call(CarsSeeder::class);
        $this->call(CarsTariffsSeeder::class);
        $this->call(UsersSeeder::class);
    }
}
