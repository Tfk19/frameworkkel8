<?php
use App\Http\Controllers\MateriController;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\BimbingantaController;
use App\Http\Controllers\BimbinganController;
use App\Http\Controllers\DaftarBimbinganController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
// use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


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

Auth::routes();
Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('home', [HomeController::class])->name('home');
Route::get('tentang', TentangController::class)->name('tentang');
Route::get('materi', MateriController::class)->name('materi');
// Route::resource('admins', AdminController::class);
Route::resource('bimbingan', BimbinganController::class);
// Route::resource('bimbingan', 'BimbinganController')->name('bimbingan')->parameters([
//     'bimbingan' => 'id' // Assuming 'id' is the parameter for the route.
// ]);
// Route::get('daftarbimbingan', DaftarBimbinganController::class)->name('daftarbimbingan');
Route::get('bimbinganta', BimbingantaController::class)->name('bimbinganta')->middleware('auth');
Route::get('jadwal', JadwalController::class)->name('jadwal')->middleware('auth');
// Route::resource('employees', EmployeeController::class)->middleware('auth');


Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('download-file/{employeeId}', [EmployeeController::class, 'downloadFile'])->name('admmins.downloadFile');

// Route::get('getAdmins', [AdminController::class, 'getData'])->name('admins.getData');

// Route::get('exportExcel', [AdminController::class, 'exportExcel'])->name('admins.exportExcel');
// Route::get('exportPdf', [AdminController::class, 'exportPdf'])->name('admins.exportPdf');

