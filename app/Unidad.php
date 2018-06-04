<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unidad extends Model
{
    protected $table = 'latigo2018_unidad';

   public function usuarios()
    {
    	return $this->belongsTo('App\Usuario');
    }
}
