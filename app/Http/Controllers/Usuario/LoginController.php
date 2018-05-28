<?php

namespace App\Http\Controllers\Usuario;

use Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//use Illuminate\Foundation\Auth\AuthenticatesUsers;

//use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    //use AuthenticatesUsers;

    public function showLoginForm()
    {
    	return view('usuario.login');
    }

    // METODO PARA AUTENTICAR USUARIOS 
    public function login(Request $request)
    {
        $this->validate($request,[
            'username' => 'required|string',
            'password' => 'required|string'
        ]);
        
         if(Auth::attempt(['nom_usuario' => $request->input('username'), 'password' => $request->input('password')]))
         {
            return redirect()->intended('/'); //Route
         }
         
         return back()->withErrors(['username' => 'Datos inválidos'])->withInput(request(['username']));
    }

    protected $redirectTo = '/';

    public function username()
    {
        return 'nom_usuario';
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        return redirect('login');
    }
    //protected $guard = 'usuario';
}
