<?php

use App\Prueba;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class PruebasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Prueba::firstOrCreate([
            'fecha' => Carbon::parse('2020-05-18'),
            'resultado' => false,
            'idCatalogo' => '2'
        ]);
        Prueba::firstOrCreate([
            'fecha' => Carbon::parse('2020-05-25'),
            'resultado' => false,
            'idCatalogo' => '2'
        ]);   
        Prueba::firstOrCreate([
            'fecha' => Carbon::parse('2020-05-05'),
            'resultado' => false,
            'idCatalogo' => '3'
        ]);   
        Prueba::firstOrCreate([
            'fecha' => Carbon::parse('2020-05-12'),
            'resultado' => true,
            'idCatalogo' => '3'
        ]);   
        Prueba::firstOrCreate([
            'fecha' => Carbon::parse('2020-05-20'),
            'resultado' => false,
            'idCatalogo' => '4'
        ]);   
    }
}
