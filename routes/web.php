<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KategoriProdukController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PenilaianController;
use Illuminate\Support\Facades\Auth;


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
    return view('welcome');
});


//ini route untuk backend atau admin
Route::group(['middleware' => ['auth', 'peran:admin-manager-pelanggan']], function(){
    Route::prefix('admin')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index']);

        Route::get('/produk', [ProdukController::class, 'index']);
        Route::get('/produk/create', [ProdukController::class, 'create']);
        Route::post('/produk/store', [ProdukController::class, 'store']);
        Route::post('/produk/update/{id}', [ProdukController::class, 'update']);
        Route::get('/produk/delete/{id}', [ProdukController::class, 'destroy']);
        Route::get('/produk/edit/{id}', [ProdukController::class, 'edit']);
        Route::get('/produk/detail/{id}',[ProdukController::class, 'show']);

        Route::get('/kategoriproduk', [KategoriProdukController::class, 'index']);
        Route::post('/kategoriproduk/store', [KategoriProdukController::class, 'store']);
        Route::get('/kategoriproduk/delete/{id}', [KategoriProdukController::class, 'destroy']);
        Route::get('/kategoriproduk/create', [KategoriProdukController::class, 'create']);

        Route::get('/pesanan', [PesananController::class, 'index']);
        Route::get('/pesanan/create', [PesananController::class, 'create']);
        Route::post('/pesanan/store', [PesananController::class, 'store']);
        Route::get('/pesanan/delete/{id}', [PesananController::class, 'destroy']);
        Route::post('/pesanan/update/{id}', [PesananController::class, 'update']);
        Route::get('/pesanan/edit/{id}', [PesananController::class, 'edit']);
        Route::get('/pesanan/detail/{id}',[PesananController::class, 'show']);

        Route::post('/logout', [DashboardController::class, 'logout']);






    });
    });

Route::get('/frontend', function(){
    return view('frontend');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('theQAF')->group(function () {
    Route::get('/frontend', [FrontendController::class, 'index']);
    Route::get('/learnmore', [PenilaianController::class, 'index']);
    Route::get('/admin',[AdminController::class, 'index']);


});



Route::prefix('frontend')->group(function () {
    Route::get('/home', [DashboardFrontendController::class, 'index']);
    Route::get('/about', [AboutController::class, 'index']);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');