@extends('site')

@section('section')
<main class="container m-5">
  <div class="bg-body-tertiary p-5 rounded">
    <h1>Edição de Categoria</h1>
    <form action="{{route('categorias.atualizar',['id' => $categoria->id])}}" method="post">
      @csrf
      @method('PUT')
      <div class="mb-3">
        <label for="descricao" class="form-label">Descrição da Categoria</label>
        <input type="text" value="{{$categoria->descricao}}" class="form-control" name="descricao" id="descricao">
      </div>
      <a href="{{URL::previous()}}" class="btn btn-secondary">Voltar</a>
      <button type="submit" class="btn btn-success">Salvar</button>
    </form>
  </div>
</main>
@endsection