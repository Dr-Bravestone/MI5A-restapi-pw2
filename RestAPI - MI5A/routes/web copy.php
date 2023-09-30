<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FakultasController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\ProvinsiController;
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

Route::get('/halo', function(){
    return "Halo semua";
});

// test
// Route::get('/mahasiswa/{nama}', function($nama){
//     echo "<h2>Nama saya $nama </h2>";
// });

Route::get('/profil/{nama?}/{pekerjaan?}', function($nama = "chris evans", $pekerjaan = "mahasiswa"){
    echo "<h2>Nama saya $nama, pekerjaan $pekerjaan.";
});

Route::get('/dosen', function(){
    return view('dosen');
});

Route::get('/jadwal', function(){
    return view('jadwal.index');
});

// route + data
// Route::get('/fakultas', function(){
//    return view('fakultas.index')->with('fakultas', ['fakultas ilmu komputer', 'ilmu komputer']); 
// });

// route resouce
Route::resource('fakultas', FakultasController::class);
Route::resource('provinsi', ProvinsiController::class);
Route::resource('prodi', ProdiController::class);
Route::resource('mahasiswa', MahasiswaController::class);
Route::get('/dashboard', [DashboardController::class, 'index']) ->name('dashboard');