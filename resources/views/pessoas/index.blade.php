@extends('site')

@section('section')
<main class="container m-5">
  <div class="bg-body-tertiary p-5 rounded">
    <h1>Listagem de Pessoas</h1>
    <a href="{{route('pessoas.novo')}}" type="button" class="btn btn-success">Nova Pessoa</a>
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">#Id</th>
          <th scope="col">Nome</th>
          <th scope="col">Telefone</th>
          <th scope="col">Email</th>
          <th scope="col">Endereço</th>
          <th scope="col">Aniversário</th>
          <th scope="col">Ações</th>
        </tr>
      </thead>      
      <tbody>
        @foreach($pessoas as $pessoa)
        <tr>
          <th scope="row">{{$pessoa->id}}</th>
          <td>{{$pessoa->nome}}</td>
          <td>{{$pessoa->telefone}}</td>
          <td>{{$pessoa->email}}</td>
          <td>{{$pessoa->endereco}}</td>
          <td>{{Carbon\Carbon::parse($pessoa->aniversario)->isoFormat('DD/MM/Y')}}</td>
          <td>
            <a href="{{route('pessoas.editar',['id' => $pessoa->id])}}" type="button" class="btn btn-primary">Editar</a>
            <a href="{{route('pessoas.apagar',['id' => $pessoa->id])}}" type="button" class="btn btn-danger">Excluir</a>
          </td>
        </tr>        
        @endforeach
      </tbody>
    </table>
  </div>
</main>
@endsection