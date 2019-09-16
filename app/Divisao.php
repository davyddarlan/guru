<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Divisao extends Model
{
    protected $fillable = ['divisao'];

    protected $table = 'divisoes';
    public $timestamps = false;
}
