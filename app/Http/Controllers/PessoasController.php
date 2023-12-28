<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pessoa;

class PessoasController extends Controller
{
    public function index()
    {
        $pessoas = Pessoa::all();        
        return view('pessoas.index',compact('pessoas'));
    }

    public function consulta($descricao){
        $pessoas = Pessoa::where('nome','like','%'.$descricao.'%')->get();
        return view('pessoas.index',compact('pessoas'));
    }

    public function create()
    {
        return view('pessoas.create');
    }

    public function store(Request $request)
    {
        Pessoa::create($request->all());
        return redirect()->route('pessoas.index');
    }

    public function edit($id)
    {
        $pessoa = Pessoa::find($id);          
        return view('pessoas.edit',compact('pessoa'));
    }

    public function update(Request $request, $id)
    {
        $pessoa = Pessoa::find($id); 
        $pessoa->update($request->all());
        return redirect()->route('pessoas.index');
    }

    public function delete($id){
        $pessoa = Pessoa::find($id);          
        return view('pessoas.delete',compact('pessoa'));
    }

    public function destroy($id)
    {
        $pessoa = Pessoa::find($id);     
        $pessoa->delete($id);
        return redirect()->route('pessoas.index');
    }
}
