<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unidad extends Model
{
    protected $table = 'latigo2018_unidad';

    public $timestamps = false;

   public function usuarios()
    {
    	return $this->hasMany('App\Usuario', 'ID_UNIDAD', 'id_unidad');
    }
}
