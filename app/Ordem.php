<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ordem extends Model
{
    protected $fillable = ['ordem'];

    public $timestamps = false;
}
