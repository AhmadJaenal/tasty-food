<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login()
    {
        if (Auth::check()) {
            return redirect('dashboard');
        }else{
            return view('dashboard.pages.auth.login');
        }
    }
    
    public function actionLogin(Request $request) 
    {
        $data = $request->validate([
            'email' => 'required|string|max:500|email',
            'password' => 'required|string|max:500',
        ]);
        
        if (Auth::Attempt($data)) {
            return redirect('dashboard');
        }else{
            Session::flash('failed', 'Email atau Password Salah');
            return back()->with('failed', 'Email or password is wrong');
        }
    }

    public function actionlogout()
    {
        Auth::logout();
        return redirect('/');
    }
}