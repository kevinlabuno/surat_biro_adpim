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

class DaftarkaroController extends Controller
{
    public function index(){
                    $date = Carbon::today()->toDateString();
        $user = Auth::user()->username;

        $tsrtmsk = DB::table('suratmasuk')->where('tanggalmsk','LIKE','%'.$date.'%')->where('tertuju','like','%'.$user.'%')->get();
        $tsrtklr = DB::table('suratkeluar')->where('tanggalklr','LIKE','%'.$date.'%')->where('tertuju','like','%'.$user.'%')->get();

        $jmsm = DB::table('suratmasuk')->where('tanggalmsk','LIKE','%'.$date.'%')->where('tertuju','like','%'.$user.'%')->count('id');
        $jmsk = DB::table('suratkeluar')->where('tanggalklr','LIKE','%'.$date.'%')->where('tertuju','like','%'.$user.'%')->count('id');
        $jm = $jmsm + $jmsk;
        $karo = DB::table('users')->where('role','like','%'.('Karo').'%')->get();
        return view ('daftarkaro',compact('karo','jm','tsrtklr','tsrtmsk'));
    }
}
