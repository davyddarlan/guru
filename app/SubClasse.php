<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubClasse extends Model
{
    protected $fillable = ['subclasse'];

    protected $table = 'sub_classes';
    public $timestamps = false;
}
