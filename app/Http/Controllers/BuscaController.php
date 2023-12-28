<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class BuscaController extends Controller
{
    public function consulta (Request $request){
        $tela_busca  = $request->tela_busca;
        $termo_busca = $request->termo_busca;

        if($tela_busca =='categorias'){           
           return redirect()->route('categorias.consulta',['descricao' => $termo_busca]);
        }else if($tela_busca =='pessoas'){
            return redirect()->route('pessoas.consulta',['descricao' => $termo_busca]);
        }else if($tela_busca =='contas'){
            return redirect()->route('contas.consulta',['descricao' => $termo_busca]);
        }        
    }
}
