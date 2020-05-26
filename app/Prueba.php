<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prueba extends Model
{
    //
    protected $table = 'pruebas';
    protected $fillable = ['fecha', 'resultado', 'idCatalogo'];

    public function catalogo()
    {
        return $this->belongsTo('App\CatTipoPruebas', 'idCatalogo');
    }
}
