<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfissionaisFormRequest;
use App\Models\Profissionais;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfissionaisController extends Controller
{
    public function store(ProfissionaisFormRequest $request){
        $profissional = Profissionais::create([
           'nome'=> $request->nome,
           'celular'=> $request->celular,
           'email'=> $request->email,
           'cpf'=> $request->cpf,
           'dataNascimento'=> $request->dataNascimento,
           'cidade'=> $request->cidade,
           'estado'=> $request->estado,
           'pais'=> $request->pais,
           'rua'=> $request->rua,
           'numero'=> $request->numero,
           'bairro'=> $request->bairro,
           'cep'=> $request->cep,
           'complemento'=> $request->complemento,
           'salario'=> $request->salario,
           'senha'=> Hash::make($request->senha)
        ]);
           return response()->json([
               "success" => true,
               "message" =>"Profissional cadrastado com sucesso",
               "data" => $profissional
   
           ],200);
       }


       public function pesquisarPorNome(Request $request)
       {
           $profissional = Profissionais::where('nome', 'like', '%' . $request->nome . '%')->get();
           if (count($profissional) > 0) {
               return response()->json([
                   'status' => true,
                   'data' => $profissional
               ]);
           }
           else{
               return response()->json([
                   'status' => false,
                   'message' => "Nenhum profissional encontrado"
               ]);
           }
       }

       public function pesquisarCpf(Request $request)
       {
           $profissional = Profissionais::where('cpf', 'like', '%' . $request->cpf . '%')->get();
           if (count($profissional) > 0) {
               return response()->json([
                   'status' => true,
                   'data' => $profissional
               ]);
           }
           else{
               return response()->json([
                   'status' => false,
                   'message' => "Nenhum ´profissional encontrado"
               ]);
           }
       }

       public function pesquisarCelular(Request $request)
       {
           $profissional = Profissionais::where('celular', 'like', '%' . $request->celular . '%')->get();
           if (count($profissional) > 0) {
               return response()->json([
                   'status' => true,
                   'data' => $profissional
               ]);
           }
           else{
               return response()->json([
                   'status' => false,
                   'message' => "Nenhum profissional encontrado"
               ]);
           }
       }

       public function pesquisarEmail(Request $request)
       {
           $profissional = Profissionais::where('email', 'like', '%' . $request->email . '%')->get();
           if (count($profissional) > 0) {
               return response()->json([
                   'status' => true,
                   'data' => $profissional
               ]);
           }
           else{
               return response()->json([
                   'status' => false,
                   'message' => "Nenhum profissional encontrado"
               ]);
           }
       }
    }


  

