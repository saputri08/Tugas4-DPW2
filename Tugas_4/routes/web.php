<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdukController;

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
    return view('index');
});

Route::get('index', [HomeController::class, 'showIndex']);
Route::get('beranda', [HomeController::class, 'showBeranda']);
Route::get('Kategori', [HomeController::class, 'showKategori']);
Route::get('login', [AuthController::class, 'showLogin']);
Route::get('contact', [HomeController::class, 'showContact']);


Route::get('produk', [ProdukController::class, 'index']);
Route::get('produk/create', [ProdukController::class, 'create']);
Route::post('produk', [ProdukController::class, 'store']);
Route::get('produk/{produk}', [ProdukController::class, 'show']);
Route::get('produk/{produk}/edit', [ProdukController::class, 'edit']);
Route::put('produk/{produk}', [ProdukController::class, 'update']);
Route::delete('produk/{produk}', [ProdukController::class, 'destroy']);

Route::get('/', [ClientProdukController::class, 'Index']);
Route::get('detail/{produk}', [ClientProdukController::class, 'show']);
Route::get('product', [ClientProdukController::class, 'prod']);








