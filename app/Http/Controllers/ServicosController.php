<?php

namespace App\Http\Controllers;

use App\Http\Requests\ServicosFormRequest;
use App\Models\Servicos;
use Illuminate\Http\Request;

class ServicosController extends Controller
{
    public function store(ServicosFormRequest $request){
        $servicos = Servicos::create([
            'nome'=> $request->nome,
            'descricao'=> $request->descricao,
            'duracao'=> $request->duracao,
            'preco'=> $request->preco,
        

        
        ]);
        return response()->json([
            "sucess" => true,
            "message" =>"Serviço Cadrastado com Sucesso",
            "data" =>$servicos
        ],200);

    }

    public function pesquisaPorNome($nome){
        $servicos = Servicos::find($nome);
        if($servicos == null){
           return response()->json([
            'status'=> false,
            'message'=> "Serviço não encontrado"
           ]);
        }
        return response()->json([
            'status'=> true,
            'data'=> $servicos
        ]);
    }

    public function pesquisarPorDescricao($descricao){
        $servicos = Servicos::find($descricao);
        if($servicos == null){
           return response()->json([
            'status'=> false,
            'message'=> "Serviço não encontrado"
           ]);
        }
        return response()->json([
            'status'=> true,
            'data'=> $servicos
        ]);
    }

    public function editar (Request $request){
        $servicos = Servicos::find($request->id);
   
        if(!isset($servicos)){
            return response()->json([
                'status'=> false,
                'message'=> 'Serviço não encontrado'
            ]);
        }
   
        if (isset($request->nome)){
            $servicos->nome = $request->nome;
        }
       
        if (isset($request->descricao)){                                                
            $servicos->descricao = $request->descricao;
        }

        if (isset($request->duracao)){
            $servicos->duracao = $request->duracao;
        }

        if (isset($request->preco)){
            $servicos->preco = $request->preco;
        }

      
    }


    public function retornarTodos()
    {
        $servicos = Servicos::all();
        return response()->json([
            'status' => true,
            'data' => $servicos
        ]);
    }

}
