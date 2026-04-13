<?php

use App\Http\Controllers\AuthConteroller;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\SuppliersController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AuthConteroller::class, 'Login'])->middleware('guest');

Route::post('/proseslogin', [AuthConteroller::class, 'ProsesLogin']);

Route::post('/proseslogout', [AuthConteroller::class, 'proseslogout']);


Route::middleware(['auth'])->group(function () {
      Route::get('/dashboard', [DashboardController::class, 'dasboard']);

Route::middleware(['cekRole:admin'])->group(function () {

    Route::get('/categories', [CategoryController::class,'index'] )->name('categories.index');
    Route::get('/categories/create', [CategoryController::class,'create'])->name('categories.create');
    Route::post('/categories/store', [CategoryController::class,'store'] )->name('categories.store');
    Route::get('/categories/update/{id}', [CategoryController::class,'update'] )->name('categories.update');
    Route::put('/categories/edit/{id}', [CategoryController::class,'edit'])->name('categories.edit');
    Route::delete('/categories/delete/{id}', [CategoryController::class,'destroy'] );

    Route::get('/produk', [ProdukController::class,'index']);
    Route::get('/produk/create', [ProdukController::class,'create']);
    Route::post('/produk/store', [ProdukController::class,'store'] );
    Route::get('/produk/update/{id}', [ProdukController::class,'update'] );
    Route::put('/produk/edit/{id}', [ProdukController::class,'edit'] );
    Route::delete('/produk/delete/{id}', [ProdukController::class,'destroy'] );

    Route::get('/supplier', [SuppliersController::class,'index']);
    Route::get('/supplier/create', [SuppliersController::class,'create']);
    Route::post('/supplier/store', [SuppliersController::class,'store'] );
    Route::get('/supplier/update/{id}', [SuppliersController::class,'update'] );
    Route::put('/supplier/edit/{id}', [SuppliersController::class,'edit'] );
    Route::delete('/supplier/delete/{id}', [SuppliersController::class,'destroy'] );

});
});

Route::get('/pelanggan', [PelangganController::class,'index'] );

Route::fallback(function(){
    return view ('eror');
});

