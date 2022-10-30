<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\DashboardController;
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

Route::get('', [DashboardController::class, 'index']);

Route::get('barang', [BarangController::class, 'index']);
Route::get('barang/input', [BarangController::class, 'create']);
Route::post('barang/input', [BarangController::class, 'store']);
Route::get('barang/update/{barang}', [BarangController::class, 'edit']);
Route::post('barang/update/{barang}', [BarangController::class, 'update']);
