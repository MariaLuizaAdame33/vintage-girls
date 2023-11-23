<?php

use App\Http\Controllers\AgendaController;
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

Route::post('servicos/nome',[ServicosController::class,'pesquisarPorNome']);

Route::delete('remover/{id}', [ServicosController::class, 'excluir']);

Route::post('descricao', [ServicosController::class, 'pesquisarPorDescricao']);

Route::put('update', [ServicosController::class, 'update']);

Route::get('servicos/find/{id}',[ServicosController::class,'pesquisarPorId']);

Route::put('servicos/editar',[ServicosController::class,'editar']);

Route::get('servicos/all',[ServicosController::class,'retornarTodos']);

Route::get('servicos/senha',[ServicosController::class,'recuperarSenha']);

Route::delete('servicos/excluir/{id}',[ServicosController::class,'excluir']);




//rotas do cliente
Route::post('cliente/store',[ClienteController::class,'store']);

Route::post('cliente/nome',[ClienteController::class,'pesquisarPorNome']);

Route::post('cliente/cpf',[ClienteController::class,'pesquisarCpf']);

Route::post('cliente/celular',[ClienteController::class,'pesquisarCelular']);

Route::post('cliente/email',[ClienteController::class,'pesquisarEmail']);

Route::get('cliente/all',[ClienteController::class,'retornarTodos']);

Route::get('cliente/find/{id}',[ClienteController::class,'pesquisarPorId']);

Route::put('cliente/editar',[ClienteController::class,'editar']);

Route::get('cliente/senha',[ClienteController::class,'recuperarSenha']);

Route::delete('cliente/excluir/{id}',[ClienteController::class,'excluir']);



//rotas profissionais
Route::post('profissional/store',[ProfissionaisController::class,'store']);

Route::post('profissional/nome',[ProfissionaisController::class,'pesquisarPorNome']);

Route::post('profissional/cpf',[ProfissionaisController::class,'pesquisarCpf']);

Route::post('profissional/celular',[ProfissionaisController::class,'pesquisarCelular']);

Route::post('profissional/email',[ProfissionaisController::class,'pesquisarEmail']);

Route::get('profissional/find/{id}',[ProfissionaisController::class,'pesquisarPorId']);

Route::put('profissional/editar',[ProfissionaisController::class,'editar']);

Route::get('profissional/all',[ProfissionaisController::class,'retornarTodos']);

Route::get('profissional/senha',[ProfissionaisController::class,'recuperarSenha']);

Route::delete('profissional/excluir/{id}',[ProfissionaisController::class,'excluir']);


//rota agenda
Route::post('agenda/store',[AgendaController::class,'store']);

Route::get('agenda/find/{id}',[AgendaController::class,'pesquisarPorId']);

Route::get('agenda/editar',[AgendaController::class,'editar']);

Route::get('agenda/excluir',[AgendaController::class,'excluir']);

Route::get('agenda/all',[AgendaController::class,'retornarTodos']);



///






















