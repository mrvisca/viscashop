<?php

use App\Http\Controllers\TransactionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AutentikasiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::prefix('otentikasi')->group(function () {
    Route::post("masuk", [AutentikasiController::class, 'login']);
    Route::post("daftar", [AutentikasiController::class, 'register']);
});

Route::middleware(['auth:sanctum'])->group(function () {
    Route::prefix('produk')->group(function () {
        Route::get("list", [ProductController::class, 'list']);
        Route::post("tambah-baru", [ProductController::class, 'add_product']);
        Route::get("detail/{id}", [ProductController::class, 'detail']);
        Route::put("update-data/{id}", [ProductController::class, 'update']);
        Route::delete("hapus-data/{id}", [ProductController::class, 'delete']);
    });

    Route::prefix('kategori')->group(function () {
        Route::get("list", [CategoryController::class, 'index']);
        Route::post("tambah-baru", [CategoryController::class, 'tambah']);
        Route::put("update-data/{id}", [CategoryController::class, 'update']);
        Route::delete("hapus-data/{id}", [CategoryController::class, 'delete']);
    });

    Route::prefix('pelanggan')->group(function () {
        Route::get("list", [ClientController::class, 'list']);
        Route::post("tambah-baru", [ClientController::class, 'tambah']);
        Route::put("update-data/{id}", [ClientController::class, 'update']);
        Route::delete("hapus-data/{id}", [ClientController::class, 'delete']);
    });

    Route::prefix('supplier')->group(function () {
        Route::get("list", [SupplierController::class, 'list']);
        Route::post("tambah-baru", [SupplierController::class, 'tambah']);
        Route::put("update-data/{id}", [SupplierController::class, 'update']);
        Route::delete("hapus-data/{id}", [SupplierController::class, 'delete']);
    });

    Route::prefix('profile')->group(function () {
        Route::get("check", [ProfileController::class, 'profile']);
        Route::post("update", [ProfileController::class, 'update']);
    });

    Route::prefix('transaksi')->group(function () {
        Route::get("list-produk", [TransactionController::class, 'list_produk']);
        Route::post("buat-transaksi", [TransactionController::class, 'transaction']);
        Route::get("list-penjualan", [TransactionController::class, 'transaksi_penjualan']);
    });

    Route::prefix('purchase')->group(function () {
        Route::get("list-produk", [TransactionController::class, 'list_produk']);
        Route::post("buat-transaksi", [TransactionController::class, 'transaction']);
        Route::get("list-penjualan", [TransactionController::class, 'transaksi_penjualan']);
    });
});

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
