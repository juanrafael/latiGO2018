<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    protected $table = "latigo2018_perfiles";

    public $timestamps = false;

    public function usuarios()
    {
    	return $this->hasMany('App\Usuario', 'ID_PERFIL', 'id_perfil');
    }
}
