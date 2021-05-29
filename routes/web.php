<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;

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
    return view('welcome');
});

Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa');
Route::get('/absen', [SiswaController::class, 'index'])->name('absen');
Route::get('/kelas', [SiswaController::class, 'index'])->name('kelas');
Route::get('/semester', [SiswaController::class, 'index'])->name('semester');
