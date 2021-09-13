<?php

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

Route::get('/aula', function () {
    return view('aula');
});

Route::resource('tipoproduto', '\App\Http\Controllers\TipoProdutoController');

Route::resource('produto', '\App\Http\Controllers\ProdutoController');