<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\User as Authenticatable;

class RegisterController extends Controller
{
       public function index()
   {
     
       return view ('register');
   }
    public function store (Request $request){

                 $messages = [
    'required' => ':attribute tidak boleh kosong!',
    'min' => ':attribute harus diisi minimal :min karakter!',
    'max' => ':attribute harus diisi maksimal :max karakter!',
];
 
             $this->validate($request,[
       'nama' => ['required', 'max:255'],
    'username' => ['required', 'unique:users', 'min:5'],
      'email' => ['required','unique:users'],
        'role' => ['required'],
          'password' => ['required'],
      ],$messages);  

      $request['password'] = bcrypt($request->input('password'));
      DB::table('users')->insert([
        'nama' => $request->nama,
        'username' => $request->username,
          'email' => $request->email,
            'role' => $request->role,
              'password' => $request->password,
              'password' => $request->password,
           ]);

   
      return redirect('login')->with(['success' => 'Register Berhasil, Silahkan Login']);

}
}
