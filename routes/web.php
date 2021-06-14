<?php

use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\PengarangController;
use Illuminate\Support\Facades\Route;

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
    // return view('welcome');
    return view('layouts.beranda');
});

Route::get('/beranda', function () {
    return view('layouts.beranda');
});

Route::get('/about', function () {
    return view('layouts.about');
});

Route::get('/salam', function () {
    return "Assalamu'alaikum bro, selamat belajar laravel yaa! semoga sukses";
});

Route::get('/pegawai/{nama}/{divisi}', function ($nama,$divisi) {
    return 'Nama Pegawai : '.$nama.'<br/>Departemen : '.$divisi;
});

Route::get('/kabar', function () {
    return view('kondisi');
});

Route::get('/nilai', function () {
    return view('nilai');
});

Route::get('/daftarnilai', function () {
    return view('daftar_nilai');
});

Route::get('/mahasiswa', [App\Http\Controllers\MahasiswaController:: class,'dataMahasiswa']);

Route::resource('/pengarang', PengarangController::class);
Route::resource('/buku', BukuController::class);
Route::resource('/anggota', AnggotaController::class);