<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Uso extends Model
{
    protected $fillable = ['uso'];
    
    public $timestamps = false;
    protected $table = 'usos';
}
