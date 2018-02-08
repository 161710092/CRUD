<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class walis extends Model
{
    protected $fillable = ['nama', 'no_telp'];
    public $timestamps = true;
}
