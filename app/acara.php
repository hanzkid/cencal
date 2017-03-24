<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class acara extends Model
{
    protected $table = 'acara';
    public function panitia()
    {
    	return $this->belongsTo('App\Panitia');
    }
}
