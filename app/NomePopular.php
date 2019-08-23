<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NomePopular extends Model
{
    protected $fillable = ['nome_popular'];
    
    public $timestamps = false;
    protected $table = 'nomes_populares';
}
