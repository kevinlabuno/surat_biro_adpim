<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DasboardController;
use App\Http\Controllers\DaftaranggotaController;
use App\Http\Controllers\DaftarkabagController;
use App\Http\Controllers\SuratmasukController;
use App\Http\Controllers\SuratkeluarController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TestingController;
use App\Http\Controllers\DaftarkaroController;
use Illuminate\Support\Facades\Input;
use App\User;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('login');
});

// -----------------Login Route-------------------------
Route::get('/login', [LoginController::class, 'login']);
Route::post('/login', [LoginController::class, 'store']);
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);
Route::get('dasboard', [DasboardController::class, 'index']);
Route::get('/logout', [LoginController::class, 'logout']);

// -----------------Surat Masuk Route-------------------------
Route::get('suratmasuk', [SuratmasukController::class, 'index']);
Route::get('inputsuratmsk', [SuratmasukController::class, 'inputmsk']);
Route::post('inputsuratmsk', [SuratmasukController::class, 'prosesinput']);

// -----------------Profil Route-------------------------
Route::get('profile/{id}', [ProfileController::class, 'index']);
Route::patch('profile/{id}',[ProfileController::class, 'upload']);
Route::patch('profile/{id}',[ProfileController::class, 'upprofil']);
Route::get('ttdprofile/{id}', [ProfileController::class, 'indexttd']);
Route::post('ttdprofile/{id}',[ProfileController::class, 'uploadttd']);

// -----------------Surat Keluar Route-------------------------
Route::get('suratkeluar', [SuratkeluarController::class, 'index']);
Route::get('surat/{id}',[SuratkeluarController::class, 'surat']);
Route::get('template',[SuratkeluarController::class, 'template']);
Route::post('template', [SuratkeluarController::class, 'prosestemplate']);
Route::get('inputsuratklr', [SuratkeluarController::class, 'inputklr']);
Route::post('inputsuratklr', [SuratkeluarController::class, 'prosesinputklr']);
Route::get('validasi/{id}', [SuratkeluarController::class, 'validas']);
Route::patch('validasi/{id}',[SuratkeluarController::class, 'upvalidas']);

// -----------------Daftar Anggota Route-------------------------
Route::get('daftaranggota', [DaftaranggotaController::class, 'index']);


// -----------------Daftar Anggota Route-------------------------
Route::get('daftarkabag', [DaftarkabagController::class, 'index']);

Route::get('testing', [TestingController::class, 'index']);
Route::get('testing1', [TestingController::class, 'index2']);


Route::get('daftarkaro', [DaftarkaroController::class, 'index'])->name('daftar.karo');