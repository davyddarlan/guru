<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marcador extends Model
{
    protected $fillable = ['marcador', 'descricao'];

    protected $table = 'marcadores';
    public $timestamps = false;
}
