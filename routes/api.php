<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ServicosController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('store',[ServicosController::class,'store']);

Route::post('nome',[ServicosController::class,'pesquisaPorNome']);

Route::delete('remover/{id}', [ServicosController::class, 'excluir']);

Route::post('descricao', [ServicosController::class, 'pesquisarPorDescricao']);

Route::put('update', [ServicosController::class, 'update']);

Route::get('all', [ServicosController::class, 'retornarTodos']);

//rotas do cliente
Route::post('store',[ClienteController::class,'store']);


