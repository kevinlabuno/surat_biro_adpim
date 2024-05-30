<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input as input;
use Illuminate\Database\Eloquent\Model;
use Response;
Use \Carbon\Carbon;
use Illuminate\Support\Str;
use Auth;
use File;
use App\Models\User;

class SuratmasukController extends Controller
{
   public function index() {
    $user = Auth::user()->username;
    $date = Carbon::today()->toDateString();

    if (Auth::user()->role == 'Anggota') {
        $suratmsk = DB::table('suratmasuk')
                      ->where('tertuju', 'like', '%' . $user . '%')
                      ->orWhere('pengirim', 'like', '%' . $user . '%')
                      ->orderBy('tanggalmsk', 'desc')
                      ->get();

        $tsrtmsk = DB::table('suratmasuk')
                     ->where('tanggalmsk', 'LIKE', '%' . $date . '%')
                     ->where('tertuju', 'like', '%' . $user . '%')
                     ->orderBy('tanggalmsk', 'desc')
                     ->get();

        $tsrtklr = DB::table('suratkeluar')
                     ->where('tanggalklr', 'LIKE', '%' . $date . '%')
                     ->where('tertuju', 'like', '%' . $user . '%')
                     ->orderBy('tanggalklr', 'desc')
                     ->get();

        $jmsm = DB::table('suratmasuk')
                  ->where('tanggalmsk', 'LIKE', '%' . $date . '%')
                  ->where('tertuju', 'like', '%' . $user . '%')
                  ->count('id');

        $jmsk = DB::table('suratkeluar')
                  ->where('tanggalklr', 'LIKE', '%' . $date . '%')
                  ->where('tertuju', 'like', '%' . $user . '%')
                  ->count('id');

        $jm = $jmsm + $jmsk;
    } else {
        $suratmsk = DB::table('suratmasuk')
                      ->orderBy('tanggalmsk', 'desc')
                      ->get();

        $tsrtmsk = DB::table('suratmasuk')
                     ->where('tanggalmsk', 'LIKE', '%' . $date . '%')
                     ->orderBy('tanggalmsk', 'desc')
                     ->get();

        $tsrtklr = DB::table('suratkeluar')
                     ->where('tanggalklr', 'LIKE', '%' . $date . '%')
                     ->orderBy('tanggalklr', 'desc')
                     ->get();

        $jmsm = DB::table('suratmasuk')
                  ->where('tanggalmsk', 'LIKE', '%' . $date . '%')
                  ->count('id');

        $jmsk = DB::table('suratkeluar')
                  ->where('tanggalklr', 'LIKE', '%' . $date . '%')
                  ->count('id');

        $jm = $jmsm + $jmsk;
    }

    return view('suratmasuk', compact('suratmsk', 'tsrtmsk', 'tsrtklr', 'jm'));
}


    public function inputmsk(){
        $tertuju = User::all();
        return view ('suratmsk\inputsuratmsk',compact('tertuju'));
    }

    public function prosesinput(Request $_request){
           $messages = [
    'required' => ':attribute Tidak Boleh Kosong !!!',
    'min' => ':attribute harus diisi minimal :min karakter ya cuy!!!',
    'max' => ':attribute harus diisi maksimal :max karakter ya cuy!!!',
];
 
              $this->validate($_request,[
        'namasrtmsk' => 'required',
        'nosurat' => 'required',
        'tertuju' => 'required',
        'perihal' => 'required',
        'tanggalmsk' => 'required',
        'file' => 'required|mimes:csv,txt,xlx,xls,pdf,doc,pptx|max:2048',
      ],$messages);
            
      $date = Carbon::today()->toDateString();
      $pengirim = Auth::user()->username;
      $namapengirim = Auth::user()->nama;
      $komisi = Auth::user()->komisi;
      $ketpengirim = $namapengirim.' - '.$komisi;

      $dokumen = $_request->file('file');
      $nama_file = $_request->namasrtmsk;
      $nama_dokumen = $nama_file.$date.'.'.$_request->file('file')->getClientOriginalExtension();
      $dokumen->move('uploads/',$nama_dokumen);

           DB::table('suratmasuk')->insert([
               'file' => $nama_dokumen,
               'pengirim' => $pengirim,
               'namapengirim' => $ketpengirim,
               'namasuratmsk' => $_request->namasrtmsk,
               'nosurat' => $_request->nosurat,
               'tertuju' => $_request->tertuju,
               'perihal'  => $_request->perihal,
               'tanggalmsk' => $_request->tanggalmsk,
           ]);
           
        return redirect('suratmasuk')->with('success','Data Berhasil Disimpan');
    }
}

