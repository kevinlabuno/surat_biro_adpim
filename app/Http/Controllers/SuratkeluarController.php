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
use setasign\Fpdi\Fpdi;
use App\Models\User;
use App\Models\suratkeluar;
use Illuminate\Support\Facades\Storage;

class SuratkeluarController extends Controller
{
    public function index(){
    $user = Auth::user()->username;
    $date = Carbon::today()->toDateString();

    if (Auth::user()->role == 'Anggota') {

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

        $data = DB::table('suratkeluar')
                  ->where('tertuju', 'like', '%' . $user . '%')
                  ->orWhere('pengirim', 'like', '%' . $user . '%')
                  ->orderBy('tanggalklr', 'desc')
                  ->get();
    } else {
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

        $data = DB::table('suratkeluar')
                  ->orderBy('tanggalklr', 'desc')
                  ->get();
    }

    return view('suratkeluar', compact('data', 'jm', 'tsrtklr', 'tsrtmsk'));
}

    public function inputklr(){
         $tertuju = User::all();
        return view ('suratklr.inputsuratklr',compact('tertuju'));
    }

      public function prosesinputklr(Request $_request){
           $messages = [
    'required' => ':attribute Tidak Boleh Kosong !!!',
    'min' => ':attribute harus diisi minimal :min karakter ya cuy!!!',
    'max' => ':attribute harus diisi maksimal :max karakter ya cuy!!!',
];
            $this->validate($_request,[
        'namasrtklr' => 'required',
       
        'tertuju' => 'required',
        'perihal' => 'required',
        'tanggalklr' => 'required',
        'file' => 'required|mimes:csv,txt,xlx,xls,pdf,doc,pptx|max:2048',
      ],$messages);
            
      $date = Carbon::today()->toDateString();
      $pengirim = Auth::user()->username;
      $namapengirim = Auth::user()->nama;
      $komisi = Auth::user()->komisi;
      $ketpengirim = $namapengirim.' - '.$komisi;

      $dokumen = $_request->file('file');
      $nama_file = $_request->namasrtklr;
      $nama_dokumen = $nama_file.$date.'.'.$_request->file('file')->getClientOriginalExtension();
      $dokumen->move('uploads/',$nama_dokumen);
           DB::table('suratkeluar')->insert([
               'file' => $nama_dokumen,
               'pengirim' => $pengirim,
               'namapengirim' => $ketpengirim,
               'namasuratklr' => $_request->namasrtklr,
               'nosurat' => $_request->nosurat,
               'tertuju' => $_request->tertuju,
               'perihal'  => $_request->perihal,
               'tanggalklr' => $_request->tanggalklr,
               'jenis_surat' => $_request->jenis_surat,
           ]);

        return redirect ('suratkeluar')->with('success','Data Berhasil Disimpan');
    }

    public function validas ($id){
        $post = DB::table('suratkeluar')->where('id', $id)->first();
        return view ('suratklr.validasi',compact('post'));
    }

    public function upvalidas (Request $_request, $id){
      $date = Carbon::today()->toDateString();
    if ($_request->file('file')) {
      $dokumen = $_request->file('file');
      $nama_file = $_request->file('file')->getClientOriginalName();
      $nama_dokumen = $nama_file.$date.'.'.$_request->file('file')->getClientOriginalExtension();
      $dokumen->move('uploads/',$nama_dokumen);
    }
           if($_request->file('file')){
                DB::table('suratkeluar') ->where('id', $id)
         ->update([
                'file' => $nama_dokumen,
                'nosurat' => $_request->nomor,
                'status' => $_request->status,
                'komen' => $_request->komen,
                  ]);
            }
         DB::table('suratkeluar') ->where('id', $id)
         ->update([
        'status' => $_request->status,
        'komen' => $_request->komen,
        ]);
        return redirect ('suratkeluar')->with('success','Data Berhasil Disimpan');
    }

    public function surat($id){

        $lihat = DB::table('suratkeluar')->where('id', $id)->first();
        return view ('suratklr.surat',compact('lihat'));
    }

    public function template(){
        $data = DB::table('template')->get();
        return view('suratklr.template',compact('data'));
    }

    public function prosestemplate(Request $_request){
  $date = Carbon::today()->toDateString();
      $dokumen = $_request->file('file');
      $jenis = $_request->jenis_surat;
      $nama_file = $_request->file('file')->getClientOriginalName();
      $nama_dokumen = $nama_file.$date.'.'.$_request->file('file')->getClientOriginalExtension();
      $dokumen->move('templates/',$nama_dokumen);
           DB::table('template')->insert([
               'file' => $nama_dokumen,
               'jenis_surat' => $jenis,
               'namasurat' =>  $nama_file,
           ]);
     return redirect ('template')->with('status','Data Berhasil Disimpan');
    }

    public function ttd_surat($id)
    {   
         $surat = Suratkeluar::findOrFail($id);
    $user = Auth::user();

    $filePath = public_path('uploads/' . $surat->file);
    $ttdPath = public_path('image/ttd/' . $user->ttd);

    $pdf = new FPDI();
    $pageCount = $pdf->setSourceFile($filePath);

    for ($pageNo = 1; $pageNo <= $pageCount; $pageNo++) {
        $pdf->AddPage();
        $tplIdx = $pdf->importPage($pageNo);
        $pdf->useTemplate($tplIdx);

        if ($pageNo == 1) {
            $x = 150;
            $y = 250;
            $pdf->Image($ttdPath, $x, $y, 30, 30);
        }
    }
    $newFileName = 'signed_' . $surat->file;
    $newFilePath = public_path('uploads/' . $newFileName);
    $pdf->Output($newFilePath, 'F');
    if (file_exists($filePath)) {
        unlink($filePath);
    }
    $surat->file = $newFileName;
    $surat->save();

        return redirect()->back()->with('success','Berkas Telah Ditanda Tangan');
    }
}
