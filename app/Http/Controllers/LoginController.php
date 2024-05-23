<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login(){
        return view ('login');
    }

     public function store(Request $request){
       $creden = $request->validate([
       'email' => 'required|email:dns',
       'password' => 'required'
     ]);

     if(Auth::attempt($creden)) {
       $request->session()->regenerate();
       return redirect()->intended('dasboard')->with(['success' => 'Login Berhasil']);
     }

     return back()->with('loginError','Login gagal!');
       
   }

   public function logout(){
        Auth::logout();
        return redirect('/login')->with('logout','Logout Berhasil, Silahkan Login Kembali'); // ini untuk redirect setelah logout
    }
}
