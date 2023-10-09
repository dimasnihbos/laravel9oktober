<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dimasController;
use App\Http\Controllers\masyarakatController;
use App\Http\Controllers\petugasController;


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

//Route::get('/', function () {
  //  return view('welcome');
//});

Route::get('/home', [dimasController::class, 'index']);

Route::get('isi', function(){
  return view('isi');
});

Route::post('/isi', [dimasController::class, 'isi_pengaduan']);

Route::get('masyarakat', [masyarakatController::class, 'rakyat']);

Route::get('petugas', [petugasController::class, 'petugas']);

Route::get('loginmasyarakat', [masyarakatController::class, 'Login']);

Route::get('regis', [masyarakatController::class, 'register']);

Route::get('logpetugas', [petugasController::class, 'loginpetugas']);

Route::get('/hapus-pengaduan/{id}', [dimasController::class, 'hapus']);

Route::get('/detail-pengaduan/{id}', [dimasController::class, 'detail_pengaduan']);

//Route::get('/isi', function () {
  //  return view('isi');
//});

//Route::get('/login', function () {
  //  return view('login');
//});

