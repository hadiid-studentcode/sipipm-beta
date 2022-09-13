<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(){

        if (Auth::check()) {
            return redirect('/dashboard');
        } else {
            return view('Login.index');
        }
    }

    public function authenticate(Request $request){

       

        $credentials = $request->validate([
            'nba' => ['required'],
            'password' => ['required'],
        ]);



        if (Auth::attempt($credentials)) {

            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }


      

        return back()->with('error','nba dan password anda salah !');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
