<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AutentikasiController;
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
    return view('login');
});

// Route Autentikasi
Route::get('/oth/login',[AutentikasiController::class, 'halaman_login'])->name('login');
Route::get('/oth/register',[AutentikasiController::class, 'halaman_registrasi'])->name('registrasi');

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/dashboard/index',[DashboardController::class, 'index'])->name('admin.dashboard');
});

