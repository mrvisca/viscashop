<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AutentikasiController;
use App\Http\Controllers\SupplierController;
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

Route::get('/dashboard/index',[DashboardController::class, 'index'])->name('admin.dashboard');

Route::get('/product/list',[ProductController::class, 'view_product'])->name('admin.product');
Route::get('/product/add',[ProductController::class, 'form_tambah'])->name('admin.product.add');
Route::get('/product/edit',[ProductController::class, 'edit_form'])->name('admin.product.edit');

Route::get('/category/list',[CategoryController::class, 'list_kategori'])->name('admin.kategori');
Route::get('/customer/list',[ClientController::class, 'customer_list'])->name('admin.customer');
Route::get('/supplier/list',[SupplierController::class, 'supplier_list'])->name('admin.supplier');
Route::get('/stock/history',[ProductController::class, 'history_stock'])->name('admin.history');

