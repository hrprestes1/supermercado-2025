<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\TipoProdutosController;
use App\Http\Controllers\FornecedorController;


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

Route::get('/produtos',[ProdutosController::class, 'show'])->name('produtos.show');
Route::get('/produtos/novo',[ProdutosController::class, 'novo']) ->name('produtos.novo');
Route::post('/produtos/Novo',[ProdutosController::class, 'inserir'])->name('produtos.inserir');
Route::get('produtos/alterar/{id}',[ProdutosController::class, 'alterar'])->name('produtos.alterar');
Route::post('produtos/alterar/{id}',[ProdutosController::class, 'editar'])->name('produtos.editar');