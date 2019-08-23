<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Especie extends Model
{
    use SoftDeletes;
    
    public $timestamps = false;

    protected $fillable = [
        'nome_cientifico', 'descobridor', 'data_descoberta',
        'estado_conservacao', 'codigo_internacional_especie'
    ];

    public function getRouteKeyName()
    {
        return 'codigo_internacional_especie';
    }
}
