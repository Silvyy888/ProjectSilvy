<?php

use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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

Route::middleware('statusLogin')->group(function() {
});
Route::get('/', [UserController::class, 'index']);
Route::get('/login', [UserController::class, 'login']);
Route::post('/auth', [UserController::class,'auth']);
Route::get('/home', [UserController::class,'index']);
Route::get('/beranda', [UserController::class, 'beranda']);
Route::get('/masuk/daftar', [UserController::class, 'daftar']);

// UNTUK PAGE DASHBOARD
Route::get('/dshbrd', [UserController::class, 'dshbrd']);
Route::get('/dsbrberanda', [UserController::class, 'dshbrd']);
// Route::get('/dshbrdproduk', [UserController::class, 'dshbrdproduk']);
Route::get('/produk', [UserController::class, 'dshbrdproduk']);
Route::get('/pesanan', [UserController::class, 'dshbrdpesanan']);
Route::get('/dsbrdlogout', [UserController::class, 'dshbrdlogout']);
Route::get('/dsbrdset', [UserController::class, 'dshbrdsetting']);

Route::get('/produk', [ProdukController::class, 'show']);
Route::get('/produk/create', [ProdukController::class, 'create']);
Route::post('/produk/create', [ProdukController::class, 'add']);
Route::post('/search',[ProdukController::class,'search']);
Route::get('/produk/edit/{id}', [ProdukController::class, 'edit']);
Route::post('/produk/edit/{id}',[ProdukController::class,'update']);
Route::get('/produk/delete/{id}',[ProdukController::class,'delete']);

Route::get('/admin', [UserController::class, 'admin']);
Route::get('/berjualan', [UserController::class, 'admin']);
Route::get('/account', [UserController::class, 'account']);
Route::get('/trolly', [UserController::class, 'trolly']);
Route::get('/co', [UserController::class, 'checkout']);
Route::get('/hmproduct', [UserController::class, 'hmproduct']);






// Route::get('/create', [ProdukController::class,'create']);
// Route::get('/simpan', [ProdukController::class, 'simpan']);
// Route::middleware('statusAdmin')->group(function() {
// });
// Route::post('/authen', [UserController::class,'authentication']);

// Route::get('/produk',[ProdukController::class,'show']);
// Route::get('/produk',[ProdukController::class,'create']);
// Route::get('/create', [UserController::class, 'create']);


