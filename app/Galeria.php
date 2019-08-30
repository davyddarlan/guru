<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galeria extends Model
{
    protected $fillable = ['localizacao', 'titulo', 'descricao'];

    public $timestamps = false;
}
