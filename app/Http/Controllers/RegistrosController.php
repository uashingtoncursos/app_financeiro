<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registro;
use App\Models\Pessoa;
use App\Models\Categoria;

class RegistrosController extends Controller
{
    public function index()
    {   
        $contas = Registro::all();
        return view('contas.index',compact('contas'));
    }

    public function consulta($descricao){
        $contas = Registro::where('descricao','like','%'.$descricao.'%')->get();
        return view('contas.index',compact('contas'));
    }

    public function create()
    {
        $pessoas = Pessoa::all(); 
        $categorias = Categoria::all(); 
        return view('contas.create', compact(['pessoas','categorias']));
    }

    public function store(Request $request)
    {
        Registro::create($request->all());
        return redirect()->route('contas.index');
    }    

    public function edit($id)
    {
        $registro = Registro::find($id); 
        $pessoas = Pessoa::all(); 
        $categorias = Categoria::all();
        return view('contas.edit', compact(['registro','pessoas','categorias'])); 
    }

    public function update(Request $request, $id)
    {
        $registro = Registro::find($id); 
        $registro->update($request->all());
        return redirect()->route('contas.index');
    }

    public function delete($id){
        $registro = Registro::find($id); 
        $pessoas = Pessoa::all(); 
        $categorias = Categoria::all();        
        return view('contas.delete',compact(['registro','pessoas','categorias'])); 
    }

    public function destroy($id)
    {
        $registro = Registro::find($id);     
        $registro->delete($id);
        return redirect()->route('contas.index');
    }
}
