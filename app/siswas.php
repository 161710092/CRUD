<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class siswas extends Model
{
    protected $fillable = ['nis', 'nama'];
    public $timestamps = true;
}
