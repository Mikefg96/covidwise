<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PacienteHasPrueba extends Model
{
    //
    protected $table = 'pacientes_has_pruebas';
    protected $fillable = ['idPaciente', 'idPrueba'];

    public function paciente()
    {
        return $this->belongsTo('App\Paciente', 'idPaciente');
    }

    public function prueba()
    {
        return $this->belongsTo('App\Prueba', 'idPrueba');
    }
}
