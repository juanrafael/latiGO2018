<?php

namespace App\Http\Controllers\Usuario;

use Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function showLoginForm()
    {
    	return view('usuario.login');
    }

    public function login(Request $request)
    {
    	$this->validate($request,[
    		'username' => 'required|string',
    		'password' => 'required|string'
    	]);

    	//return $hola;
    	 if(Auth::attempt(['nom_usuario' => $request->input('username'), 'password' => $request->input('password')]))
    	 {
    	 	return 'tu sesion a ingresado';
    	 }

    	 return 'Error';

    }

   

    //protected $guard = 'usuario';
}
