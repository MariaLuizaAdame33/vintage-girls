<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProfissionaisController;
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
//Servicos
Route::post('store',[ServicosController::class,'store']);

Route::post('nome',[ServicosController::class,'pesquisaPorNome']);

Route::delete('remover/{id}', [ServicosController::class, 'excluir']);

Route::post('descricao', [ServicosController::class, 'pesquisarPorDescricao']);

Route::put('update', [ServicosController::class, 'update']);

Route::get('all', [ServicosController::class, 'retornarTodos']);

//rotas do cliente
Route::post('cliente/store',[ClienteController::class,'store']);

Route::post('cliente/nome',[ClienteController::class,'pesquisarPorNome']);

Route::post('cliente/cpf',[ClienteController::class,'pesquisarCpf']);

Route::post('cliente/celular',[ClienteController::class,'pesquisarCelular']);

Route::post('cliente/email',[ClienteController::class,'pesquisarEmail']);

//rotas profissionais

Route::post('profissional/store',[ProfissionaisController::class,'store']);

Route::post('profissional/nome',[ProfissionaisController::class,'pesquisarPorNome']);

Route::post('profissional/cpf',[ProfissionaisController::class,'pesquisarCpf']);

Route::post('profissional/celular',[ProfissionaisController::class,'pesquisarCelular']);

Route::post('profissional/email',[ProfissionaisController::class,'pesquisarEmail']);

//rota agenda
Route::post('Agenda/store',[AgendaController::class,'store']);


///

Route::get('cliente/all',[ClienteController::class,'retornarTodos']);

Route::get('profissional/all',[ProfissionaisController::class,'retornarTodos']);

Route::get('servicos/all',[ServicosController::class,'retornarTodos']);

///

Route::get('cliente/find/{id}',[ClienteController::class,'pesquisarPorId']);
Route::put('cliente/editar',[ClienteController::class,'editar']);

Route::get('profissional/find/{id}',[ProfissionaisController::class,'pesquisarPorId']);
Route::put('profissional/editar',[ProfissionaisController::class,'editar']);

Route::get('servicos/find/{id}',[ServicosController::class,'pesquisarPorId']);
Route::put('servicos/editar',[ServicosController::class,'editar']);






