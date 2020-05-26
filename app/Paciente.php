<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    //
    protected $table = 'pacientes';
    protected $fillable = ['nombre', 'apellido_p', 'apellido_m', 'genero', 'edad'];
    
}
