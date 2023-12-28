@extends('site')

@section('section')
<main class="container m-5">
  <div class="bg-body-tertiary p-5 rounded">
    <h1>Listagem de Contas</h1>
    <a href="{{route('contas.novo')}}" type="button" class="btn btn-success">Nova Conta</a>
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">#Id</th>
          <th scope="col">Descrição</th>
          <th scope="col">Destino/Origem</th>
          <th scope="col">Categoria</th>
          <th scope="col">Tipo</th>
          <th scope="col">Data Vencimento</th>
          <th scope="col">Data Pagamento</th>
          <th scope="col">Valor</th>
          <th scope="col">Ações</th>
        </tr>
      </thead>      
      <tbody>
        @foreach($contas as $conta)
        <tr>
          <th scope="row">{{$conta->id}}</th>
          <td>{{$conta->descricao}}</td>
          <td>{{$conta->pessoa->nome}}</td>
          <td>{{$conta->categoria->descricao}}</td>
          <td>{{$conta->tipo == 'P' ? 'Pagar': 'Receber'}}</td>
          <td>{{Carbon\Carbon::parse($conta->data_vencimento)->isoFormat('DD/MM/Y')}}</td>
          <td>{{Carbon\Carbon::parse($conta->data_pagamento)->isoFormat('DD/MM/Y')}}</td>
          <td>R$ {{$conta->valor}}</td>
          <td>
            <a href="{{route('contas.editar',['id' => $conta->id])}}" type="button" class="btn btn-primary">Editar</a>
            <a href="{{route('contas.apagar',['id' => $conta->id])}}" type="button" class="btn btn-danger">Excluir</a>
          </td>
        </tr>        
        @endforeach
      </tbody>
    </table>
  </div>
</main>
@endsection