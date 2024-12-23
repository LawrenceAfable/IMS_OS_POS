<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

// route to navigate to index.blade.php
Route::get('/product', [ProductController::class, 'index'])->name('products.index');
// route to navigate to create.blade.php
Route::get('/product/create', [ProductController::class, 'create'])->name('products.create');
// route to store the data to database
Route::post('/product', [ProductController::class, 'store'])->name('products.store');
// route to navigate to edit page
Route::get('/product/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
// route to update data
Route::put('/product/{product}/update', [ProductController::class, 'update'])->name('products.update');
// route to delete
Route::delete('/product/{product}/destroy', [ProductController::class, 'destroy'])->name('products.destroy');

