<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class SesiController extends Controller
{
    function index()
    {
        return view('login',[
            'title' => 'Login'
        ]);
    }

    function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ],[
            'email.required' => 'Email harus diisi',
            'password.required' => 'Password harus diisi'
        ]);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if(Auth::attempt($infologin)){
           if(Auth::user()->role == 'admin'){
                return redirect('/admin');
              }elseif(Auth::user()->role == 'staff'){
                return redirect('/admin/staff');
                }elseif(Auth::user()->role == 'user'){
                return redirect('/products');
                }
        }else{
            return redirect('/login')->withErrors('Email atau password salah')->withInput();
        }
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/home');
    }
}
