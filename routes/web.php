<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\JkController;
use App\Http\Controllers\RegistrasiController;
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
    return view('template.main1');
});
//// ROUTE REGISTRSI
Route::get('/registrasi', [RegistrasiController::class, 'index'])->name('registrasi');
Route::get('/registrasi/create', [RegistrasiController::class, 'create'])->name('registrasi.create');
Route::put('/registrasi/store', [RegistrasiController::class, 'store'])->name('registrasi.store');
Route::get('/registrasi/destroy{id}', [RegistrasiController::class, 'destroy'])->name('registrasi.destroy');
Route::get('/registrasi/edit/{id}', [RegistrasiController::class, 'edit'])->name('registrasi.edit');
Route::put('/registrasi/update/{id}', [RegistrasiController::class, 'update'])->name('registrasi.update');

//// ROUTE JK
Route::get('/jk', [JkController::class, 'index'])->name('jk');
Route::get('/jk/create', [JkController::class, 'create'])->name('jk.create');
Route::put('/jk/store', [JkController::class, 'store'])->name('jk.store');
Route::get('/jk/destroy{id}', [jkController::class, 'destroy'])->name('jk.destroy');
Route::get('/jk/edit/{id}', [JkController::class, 'edit'])->name('jk.edit');
Route::put('/jk/update/{id}', [JkController::class, 'update'])->name('jk.update');

//// ROUTE JURUSAN
Route::get('/jurusan', [JurusanController::class, 'index'])->name('jurusan');
Route::get('/jurusan/create', [JurusanController::class, 'create'])->name('jurusan.create');
Route::put('/jurusan/store', [JurusanController::class, 'store'])->name('jurusan.store');
Route::get('/jurusan/destroy{id}', [JurusanController::class, 'destroy'])->name('jurusan.destroy');
Route::get('/jurusan/edit/{id}', [JurusanController::class, 'edit'])->name('jurusan.edit');
Route::put('/jurusan/update/{id}', [JurusanController::class, 'update'])->name('jurusan.update');

//// ROUTE BERANDA
Route::get('/', [BerandaController::class, 'index'])->name('beranda');
Route::get('/beranda/create', [BerandaController::class, 'create'])->name('beranda.create');
Route::put('/beranda/store', [BerandaController::class, 'store'])->name('beranda.store');

//// ROUTE DASHBOARD
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/dashboard/cetak', [DashboardController::class, 'cetakpdf'])->name('dashboard.cetak');