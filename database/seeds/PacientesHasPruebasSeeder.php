<?php

use App\PacienteHasPrueba;
use Illuminate\Database\Seeder;

class PacientesHasPruebasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        PacienteHasPrueba::firstOrCreate([
            'idPaciente' => '1',
            'idPrueba' => '1'
        ]);
        PacienteHasPrueba::firstOrCreate([
            'idPaciente' => '1',
            'idPrueba' => '2'
        ]);
        PacienteHasPrueba::firstOrCreate([
            'idPaciente' => '2',
            'idPrueba' => '3'
        ]);
        PacienteHasPrueba::firstOrCreate([
            'idPaciente' => '2',
            'idPrueba' => '4'
        ]);
        PacienteHasPrueba::firstOrCreate([
            'idPaciente' => '3',
            'idPrueba' => '5'
        ]);
    }
}
