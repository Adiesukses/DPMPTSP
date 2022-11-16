<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controller_nominatif;
use App\Http\Controllers\controller_sppdkadin;
use App\Http\Controllers\controller_rekening;
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

Route::get('/kadinsppd', [controller_sppdkadin::class,'index']);
//Route::get('/kadinsppd', [controller_rekening::class,'index']);
Route::get('/kadinsppdctk{id}', [controller_sppdkadin::class,'cetak']);
Route::post('/tambahsppd', [controller_sppdkadin::class,'store']);
Route::post('/tambahrek', [controller_rekening::class,'store']);

Route::get('/cetak2', function () {
    return view('kadin_sppd_cetak2');
});


Route::get('/',[controller_nominatif::class,'dashboard']);
Route::get('/Dashboard', [controller_nominatif::class,'dashboard']);
Route::get('/Nominatif', [controller_nominatif::class,'Nominatif']);
Route::post('/get_data', [controller_nominatif::class,'getData']);
Route::get('/nominatif_list', [controller_nominatif::class,'listData']);
//----------------------------------------------------------------------
//Route Tambah data
Route::get('/Form_Tambah', [controller_nominatif::class,'Nom_Tambah']);
Route::post('/tambahpeg', [controller_nominatif::class,'tambahpeg']);
//----------------------------------------------------------------------
//Route Edit Data
Route::get('/Nom_Edit{id}', [controller_nominatif::class,'Nom_Edit']);
Route::post('/update{id}', [controller_nominatif::class,'update']);
//-----------------------------------------------------------------------
//Route Delete Data
Route::get('/delete{id}', [controller_nominatif::class,'delete']);
//-----------------------------------------------------------------------
Route::get('/pro', [controller_nominatif::class,'cc']);


Route::post('/tambahdata', function () {
    return view('coba');
});