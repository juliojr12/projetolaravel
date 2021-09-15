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
})->name('init');

Route::resource('tipoproduto', '\App\Http\Controllers\TipoProdutoController');

Route::resource('produto', '\App\Http\Controllers\ProdutoController');

//Route::get('/prod', '\App\Http\Controllers\ProdutoController@index')->name('produto.index');
//Route::get('/prod/create', '\App\Http\Controllers\ProdutoController@create')->name('produto.create');;
//oute::post('/prod', '\App\Http\Controllers\ProdutoController@store')->name('produto.store');;
