<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Panitia extends Model
{
    protected $table = 'panitia';
    public function acara()
    {
    	return $this->hasMany('App\acara');
    }
}
