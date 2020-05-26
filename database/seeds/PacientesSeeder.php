<?php

use App\Paciente;
use Illuminate\Database\Seeder;

class PacientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Paciente::firstOrCreate([
            'nombre' => 'Miguel',
            'apellido_p' => 'Flores',
            'apellido_m' => 'Gardea',
            'genero' => true,
            'edad' => '23'
        ]);
        Paciente::firstOrCreate([
            'nombre' => 'Alberto',
            'apellido_p' => 'Gutiérrez',
            'apellido_m' => 'Acosta',
            'genero' => true,
            'edad' => '22'
        ]);
        Paciente::firstOrCreate([
            'nombre' => 'Ximena',
            'apellido_p' => 'Hernández',
            'apellido_m' => 'Jiménez',
            'genero' => false,
            'edad' => '19'
        ]);
    }
}
