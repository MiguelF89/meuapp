<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

// Redireciona a home '/' para '/products'
Route::get('/', function () {
    return redirect('/products');
});

// Rota para listar os produtos
Route::get('/products', [ProductController::class, 'index']);
