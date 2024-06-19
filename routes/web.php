<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PesanController;


Route::get ('/', [HomeController::class, 'show'])->name('/home');
// Admin Controller
Route::get('/admin-pages', [AdminController::class, 'index']);
// Login Controller
Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::post('/proses-login', [LoginController::class, 'auth']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get ('/register', [LoginController::class, 'create']);
Route::POST ('/register', [LoginController::class, 'store']);
// Produk Controller
Route::group(['middleware' => ['auth', 'is_admin:Admin']], function(){
    Route::get ('/admin-pages', [ProdukController::class, 'index']);
    Route::get ('/create', [ProdukController::class, 'create']);
    Route::POST ('/admin-pages', [ProdukController::class, 'store']);
    Route::get ('/edit/{id}', [ProdukController::class, 'edit']);
    Route::POST ('/update', [ProdukController::class, 'update']);
    Route::get ('/destroy/{id}', [ProdukController::class, 'destroy']);
});
Route::fallback(function() { return view ('error');});
