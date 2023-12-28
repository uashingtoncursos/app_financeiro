<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\PessoasController;
use App\Http\Controllers\RegistrosController;
use App\Http\Controllers\BuscaController;

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
    return view('index');
});

Route::get('/pessoas', function () {
    return view('pessoas.index');
});

Route::get('/contas', function () {
    return view('contas.index');
});

//Rotas para Categorias
Route::get('/categorias', [CategoriasController::class,'index'])->name('categorias.index');
Route::get('/categorias/cadastro', [CategoriasController::class,'create'])->name('categorias.novo');
Route::post('/categorias/cadastro', [CategoriasController::class,'store'])->name('cadastro.categoria');
Route::get('/categorias/editar/{id}', [CategoriasController::class,'edit'])->name('categorias.editar');
Route::put('/categorias/editar/{id}', [CategoriasController::class,'update'])->name('categorias.atualizar');
Route::get('/categorias/apagar/{id}', [CategoriasController::class,'delete'])->name('categorias.apagar');
Route::delete('/categorias/apagar/{id}', [CategoriasController::class,'destroy'])->name('categorias.exluir');
Route::get('/categorias/consultar/{descricao}', [CategoriasController::class,'consulta'])->name('categorias.consulta');

//Rotas para Pessoas
Route::get('/pessoas', [PessoasController::class,'index'])->name('pessoas.index');
Route::get('/pessoas/cadastro', [PessoasController::class,'create'])->name('pessoas.novo');
Route::post('/pessoas/cadastro', [PessoasController::class,'store'])->name('cadastro.pessoa');
Route::get('/pessoas/editar/{id}', [PessoasController::class,'edit'])->name('pessoas.editar');
Route::put('/pessoas/editar/{id}', [PessoasController::class,'update'])->name('pessoas.atualizar');
Route::get('/pessoas/apagar/{id}', [PessoasController::class,'delete'])->name('pessoas.apagar');
Route::delete('/pessoas/apagar/{id}', [PessoasController::class,'destroy'])->name('pessoas.excluir');
Route::get('/pessoas/consultar/{descricao}', [PessoasController::class,'consulta'])->name('pessoas.consulta');

//Rotas para Contas
Route::get('/contas', [RegistrosController::class,'index'])->name('contas.index');
Route::get('/contas/cadastro', [RegistrosController::class,'create'])->name('contas.novo');
Route::post('/contas/cadastro', [RegistrosController::class,'store'])->name('cadastro.conta');
Route::get('/contas/editar/{id}', [RegistrosController::class,'edit'])->name('contas.editar');
Route::put('/contas/editar/{id}', [RegistrosController::class,'update'])->name('contas.atualizar');
Route::get('/contas/apagar/{id}', [RegistrosController::class,'delete'])->name('contas.apagar');
Route::delete('/contas/apagar/{id}', [RegistrosController::class,'destroy'])->name('contas.excluir');
Route::get('/contas/consultar/{descricao}', [RegistrosController::class,'consulta'])->name('contas.consulta');

//Rota para busca (Categorias, Pessoas e Contas/Registros)
Route::post('/consulta', [BuscaController::class,'consulta'])->name('consulta');