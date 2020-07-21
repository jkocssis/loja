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

Route::get('/', function () {
    return view('welcome');
})->name('site.home');
Route::get('/inicio', function () {
    return view('inicio');
})->name('site.begin');

Route::resource('clientes', 'Form\\ClienteController');
Route::resource('vendedores', 'Form\\VendedorController')->parameters(['vendedores' => 'vendedor']);
Route::resource('produtos', 'Form\\ProdutoController');
Route::resource('pedidos', 'Form\\PedidoController');
Route::resource('itens_pedidos', 'Form\\itemPedidoController');

