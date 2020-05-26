<?php

use App\CatTipoPruebas;
use Illuminate\Database\Seeder;

class CatTipoPruebasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        CatTipoPruebas::firstOrCreate(['tipo' => 'Local']);
        CatTipoPruebas::firstOrCreate(['tipo' => 'Hospital privado']);
        CatTipoPruebas::firstOrCreate(['tipo' => 'Hospital público']);
        CatTipoPruebas::firstOrCreate(['tipo' => 'Empresa']);
        CatTipoPruebas::firstOrCreate(['tipo' => 'Otra']);
    }
}
