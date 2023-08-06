<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BimbinganController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\PengajarController;
use App\Http\Controllers\TentangController;
use Illuminate\Support\Facades\Auth;
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
    return view('home');
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::group(['middleware'=>'auth'],function(){
    Route::resource('Bimbingan', BimbinganController::class);
    Route::get('jadwal', JadwalController::class)->name('jadwal');
    Route::resource('Admin', AdminController::class);
    Route::get('pengajar', PengajarController::class)->name('pengajar');

});
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('Tentang', TentangController::class)->name('tentang');
Route::get('Materi', MateriController::class)->name('materi');

