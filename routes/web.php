<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//cara supaya terhubung ke controller
//Route::get('/daftar_mahasiswa','App\Http\Controllers\MahasiswaController@index');

//cara 2
use App\Http\Controllers\MahasiswaController;
Route::get('/daftar_mahasiswa',[MahasiswaController::class,'index']);

//membuat root post
Route::post('/detail_mahasiswa',[MahasiswaController::class,'detail_mhs']);



Route::get('/detail_mahasiswa/daftar_kekayaan',[MahasiswaController::class,'daftar_kekayaan']);

Route::get('/detail_mahasiswa/daftar_kekayaan',[MahasiswaController::class,'daftar_properti']);
// Route::match(['get', 'post'], '/detail_mahasiswa', [MahasiswaController::class,'detail_mhs'] );

//jalankan view secara langsung tanpa ke controller
// Route::view('/daftar_mahasiswa','daftar_mahasiswa');

use App\Http\Controllers\adminController;
Route::get('/admin/dashbord',[adminController::class,'index']);
Route::get('/admin/postingan',[adminController::class,'show_postingan']);
Route::get('/admin/arsip',[adminController::class,'show_arsip']);
Route::get('/admin/keluar',[adminController::class,'keluar']);
Route::get('/admin/secret',[adminController::class,'secret']);
Route::get('/admin/user',[adminController::class,'user']);
Route::get('/admin/role',[adminController::class,'role']);