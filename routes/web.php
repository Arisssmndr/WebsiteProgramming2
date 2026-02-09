<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/produk', [ProdukController::class,'index'] );
Route::get('/produk/create', [ProdukController::class,'create'] );

Route::get('/categories', [CategoryController::class,'index'] );
Route::get('/categories/create', [CategoryController::class,'create'] );
Route::post('/categories/store', [CategoryController::class,'store'] );
// Route::get('/categories/create', function (){
//     return view('categories.create');
// });

Route::get('/customers', [CustomersController::class,'index'] );

Route::get('/pelanggan', [PelangganController::class,'index'] );

Route::fallback(function(){
    return view ('eror');
});
