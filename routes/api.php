<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::apiResource('artikel', App\Http\Controllers\ArtikelAPIController::class);
Route::apiResource('berita', App\Http\Controllers\BeritaAPIController::class);
Route::apiResource('kategoriBerita', App\Http\Controllers\KategoriBeritaAPIController::class);
Route::apiResource('kategoriArtikel', App\Http\Controllers\KategoriArtikelAPIController::class);
Route::apiResource('galeri', App\Http\Controllers\GaleriAPIController::class);
Route::apiResource('kategoriGaleri', App\Http\Controllers\KategoriGaleriAPIController::class);
Route::apiResource('pengumuman', App\Http\Controllers\PengumumanAPIController::class);
Route::apiResource('kategoriPengumuman', App\Http\Controllers\KategoriPengumumanAPIController::class);

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//soal1
//Tampilkan artikel dengan id=17 users_id=160
Route::get('soal1', 'App\Http\Controllers\BabSatuController@a1');

//soal2
//Tampilkan artikel dengan id=2 atau id_5
Route::get('soal2','App\Http\Controllers\BabSatuController@a2');

//soal3
//Tampilkan artikel dengan id=3 dan user dengan nama=Aslijan Magantara
Route::post('soal3','App\Http\Controllers\BabSatuController@a3');

//soal4
//Tampilkan pengumuan yang dibuat oleh user yang membuat galeri dengan galeri id=269
Route::post('soal4','App\Http\Controllers\BabSatuController@a4');

//soal5
//Tampilkan pengumuan yang dibuat oleh user yang membuat galeri dengan nama ketegori galeri yang diawali dengan Aut
Route::put('soal5','App\Http\Controllers\BabDuaController@a5');

//soal6
//Tampilkan pengumuan yang dibuat oleh user yang membuat galeri dan juga membuat berita
Route::patch('soal6','App\Http\Controllers\BabDuaController@a6');

//soal7
//Tampilkan pengumuan yang dibuat oleh user yang membuat 2 berita atau lebih
Route::delete('soal7','App\Http\Controllers\BabDuaController@a7');
