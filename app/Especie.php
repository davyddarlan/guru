<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Cookie;

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

    public static function getIdEspecie()
    {
        return Cookie::get(env('ID_ESPECIE'), '');
    }

    public static function getEspecie()
    {
        return self::where('id', self::getIdEspecie())->first();
    }

    public function nomesPopulares()
    {
        return $this->hasMany('App\NomePopular', 'id_especie');
    }

    public function galerias()
    {
        return $this->hasMany('App\Galeria', 'id_especie');
    }
}
