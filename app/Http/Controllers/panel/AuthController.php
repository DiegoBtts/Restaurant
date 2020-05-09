<?php

namespace App\Http\Controllers\Panel;

use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthController extends Controller 
{
    public function showLogin()
    {
        if (Auth::check())
        {
            return redirect('home');
        }
        return view('auth.login');
    }

    public function postLogin(Request $request)
    {
        $userdata = array(
            'username' => $request->get('username'),
            'password'=> $request->get('password')
        );

        if(Auth::attempt($userdata, $request->get('remember-me', 0)))
        {
            return redirect('home');
        }
        else
        {
            dd();
        }

        return redirect('/')
                    ->with('mensaje_error', 'Tus datos son incorrectos')
                    ->withInput();
    }

    public function logOut()
    {
        Auth::logout();
        return redirect('/')
                    ->with('mensaje_error', 'Tu sesión ha sido cerrada.');
    }
}