<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class gurus extends Model
{
	protected $table = 'gurus';
    protected $fillable = ['nip', 'nama'];
    public $timestamps = true;
}
