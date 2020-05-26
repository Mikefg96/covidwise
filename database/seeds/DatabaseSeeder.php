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
        $this->call(CatTipoPruebasSeeder::class);
        $this->call(PruebasSeeder::class);
        $this->call(PacientesSeeder::class);
        $this->call(PacientesHasPruebasSeeder::class);
    }
}
