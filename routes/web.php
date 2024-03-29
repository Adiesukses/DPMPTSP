<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controller_dashboard;
use App\Http\Controllers\controller_sppdkadin;
use App\Http\Controllers\controller_rekening;
use App\Http\Controllers\controller_nominatif;
use App\Http\Controllers\controller_agenda;
use App\Http\Controllers\controller_upload;

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
Route::get('/',[controller_dashboard::class,'index']);
Route::get('/x',[controller_dashboard::class,'indexx']);
Route::get('/user',[controller_dashboard::class,'index2']);
Route::get('/Dashboard', [controller_dashboard::class,'index']);
Route::get('/dashList', [controller_dashboard::class,'listData']);
Route::get('/dashList2', [controller_dashboard::class,'listData2']);
Route::get('/datanotif', [controller_dashboard::class,'showNotif']);
Route::post('/tambahKeg', [controller_dashboard::class,'store']);
Route::get('/dashDelete{id}', [controller_dashboard::class,'destroy']);

//---------------------------SPPD-------------------------------------------
Route::get('/kadinsppd', [controller_sppdkadin::class,'index']);
Route::get('/kadinsppdctk/{id}', [controller_sppdkadin::class,'cetak']);
Route::get('/kadinsppdctk2/{id}', [controller_sppdkadin::class,'cetak2']);
Route::post('/tambahsppd', [controller_sppdkadin::class,'store']);
Route::post('/tambahrek', [controller_rekening::class,'store']);
//--------------------------NOMINATIF--------------------------------------------
Route::get('/nominatif', [controller_nominatif::class,'index']);
Route::get('/nominatifList', [controller_nominatif::class,'listData']);
Route::post('/nominatifTambah', [controller_nominatif::class,'store']);
Route::post('/nominatifData', [controller_nominatif::class,'getData']);
Route::post('/nomUpdate/{id}', [controller_nominatif::class,'update']);
Route::get('/nomDelete{id}', [controller_nominatif::class,'destroy']);
Route::get('/export', [controller_nominatif::class,'exportNominatif']);
Route::post('/import', [controller_nominatif::class,'importNominatif']);
//-------------------------AGENDA---------------------------------------------
Route::get('/agenda', [controller_agenda::class,'index']);
Route::get('/agendaList', [controller_agenda::class,'listData']);
Route::post('/agendaTambah', [controller_agenda::class,'store']);
Route::post('/agendaData', [controller_agenda::class,'getData']);
Route::post('/agenUpdate/{id}', [controller_agenda::class,'update']);
Route::get('/agenDelete{id}', [controller_agenda::class,'destroy']);
//-------------------------DOKUMEN---------------------------------------------
Route::get('/dok', [controller_upload::class,'index']);
Route::post('/upload', [controller_upload::class,'store']);

Route::get('/dd', function () {
     return view('layout/home2');
 });
 Route::get('/cb', function () {
    return view('dashboard/dashboard_user2');
});