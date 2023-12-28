@extends('site')

@section('section')
<main class="container m-5">
  <div class="bg-body-tertiary p-5 rounded">
    <h1>Listagem de Categorias</h1>
    <a href="{{route('categorias.novo')}}" type="button" class="btn btn-success">Nova Categoria</a>
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">#Id</th>
          <th scope="col">Descrição Categoria</th>
          <th scope="col">Ações</th>
        </tr>
      </thead>
      <tbody>
        @foreach($categorias as $categoria)
        <tr>
          <th scope="row">{{$categoria->id}}</th>
          <td>{{$categoria->descricao}}</td>
          <td>
            <a href="{{route('categorias.editar',['id' => $categoria->id])}}" type="button" class="btn btn-primary">Editar</a>
            <a href="{{route('categorias.apagar',['id' => $categoria->id])}}" type="button" class="btn btn-danger">Excluir</a>
          </td>
        </tr>        
        @endforeach
      </tbody>
    </table>
  </div>
</main>
@endsection