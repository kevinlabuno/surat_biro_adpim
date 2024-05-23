<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input as input;
use Illuminate\Database\Eloquent\Model;
use Response;
Use \Carbon\Carbon;
use Illuminate\Support\Str;


class ProfileController extends Controller
{
 public function __construct()
    {
        $this->middleware('auth');
    }
    public function index($id) {
        // $edts = DB::table('kiloan')->where('id', $id)->first();
        $date = Carbon::today()->toDateString();
        $user = Auth::user()->username;

       $tsrtmsk = DB::table('suratmasuk')->where('tanggalmsk','LIKE','%'.$date.'%')->where('tertuju','like','%'.$user.'%')->get();
        $tsrtklr = DB::table('suratkeluar')->where('tanggalklr','LIKE','%'.$date.'%')->where('tertuju','like','%'.$user.'%')->get();

        $jmsm = DB::table('suratmasuk')->where('tanggalmsk','LIKE','%'.$date.'%')->where('tertuju','like','%'.$user.'%')->count('id');
        $jmsk = DB::table('suratkeluar')->where('tanggalklr','LIKE','%'.$date.'%')->where('tertuju','like','%'.$user.'%')->count('id');
        $jm = $jmsm + $jmsk;
        return view ('profile',compact ('date','jm','tsrtklr','tsrtmsk','user'));
    }
    public function upprofil(Request $request, $id){
         $messages = [
        'required' => ':attribute Tidak Boleh Kosong !!!',
        'min' => ':attribute harus diisi minimal :min karakter !!!',
        'max' => ':attribute harus diisi maksimal :max karakter !!!',
        ];
        $this->validate($request,[
        'bagian' => 'required',
        'status' => 'required',
        'biro' => 'required',
        ],$messages);
        $date = Carbon::today()->toDateString();
            if ($foto = $request->file('foto')) {
        $foto = $request->file('foto');
        $namafoto = 'FT'.$date.'.'.$request->file('foto')->getClientOriginalExtension();
        $foto->move('image/foto/',$namafoto);
          DB::table('users') ->where('id', $id)
         ->update([
        'image' => $namafoto,]);
           } 
         DB::table('users') ->where('id', $id)
         ->update([
        'nama' => $request->nama,
        'bagian' => $request->bagian,
        'status' => $request->status,
        'tentang' => $request->tentang,
        'notelp' => $request->notelp,
        'alamat' => $request->alamat,
        'biro' => $request->biro,
        'jabatan' => $request->jabatan,
        ]);
        return redirect('profile\.{{$id}}')->with(['success' => 'Data Berhasil Diubah/Ditambah']);
    }
    public function indexttd(){
      return view ('profile\ttdprofile');
    }

     public function uploadttd(Request $request, $id){

       $date = Carbon::today()->toDateString();
        $userss = Auth::user()->username;
        if ($image_parts = explode(";base64,", $request->signed)) {
        $folderPath = public_path('image/ttd/');
        $image_parts = explode(";base64,", $request->signed);
        $image_type_aux = explode("image/", $image_parts[0]);
        $image_type = $image_type_aux[1];
        $image_base64 = base64_decode($image_parts[1]);
        $file = $folderPath . "TTD" .$userss. '.'.$image_type;
        $filesave = "TTD". $userss. '.'.$image_type;
        file_put_contents($file, $image_base64);
           
        DB::table('users') ->where('id', $id)
         ->update([
        'ttd' => $filesave,
        ]);

           } 
      return redirect()->back() ;
    }
}
