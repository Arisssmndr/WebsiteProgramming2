<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class AuthConteroller extends Controller
{
    //
    public function Login (){
        return view ('auth.login');
    }

    public function ProsesLogin(Request $request) {
        $credential = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(Auth::attempt($credential)){
            $request->session()->regenerate();
            // return "Login Berhasil";
            return redirect()->intended('/dashboard');
        }

        return Redirect::back()->withErrors([
            'email' => 'Login Gagal, Email atau Password Salah'
        ]);
    }

    public function proseslogout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerate();
    }
}
