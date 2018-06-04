<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{
    protected $table = "latigo2018_usuario";

    public $timestamps = false;

    protected $fillable = [
        'nombre', 'nom_usuario', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function unidad()
    {
    	return $this->hasOne('App\Unidad');
    }
}
