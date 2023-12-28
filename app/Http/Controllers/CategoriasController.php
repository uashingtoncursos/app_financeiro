<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriasController extends Controller
{
    public function index(){        
        $categorias = Categoria::all();        
        return view('categorias.index',compact('categorias'));
    }

    public function consulta($descricao){
        $categorias = Categoria::where('descricao','like','%'.$descricao.'%')->get();
        return view('categorias.index',compact('categorias'));
    }

    public function create(){
        return view('categorias.create');
    }

    public function store(Request $request){
        Categoria::create($request->all());
        return redirect()->route('categorias.index');
    }

    public function edit($id){
        $categoria = Categoria::find($id);          
        return view('categorias.edit',compact('categoria'));
    }

    public function update(Request $request, $id){
        $categoria = Categoria::find($id); 
        $categoria->update([           
            'descricao' => $request['descricao']
        ]);
        return redirect()->route('categorias.index');
    }

    public function delete($id){
        $categoria = Categoria::find($id);          
        return view('categorias.delete',compact('categoria'));
    }

    public function destroy($id){
        $categoria = Categoria::find($id);     
        $categoria->delete($id);
        return redirect()->route('categorias.index');
    }
}
