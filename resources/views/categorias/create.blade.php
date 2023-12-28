@extends('site')

@section('section')
<main class="container m-5">
  <div class="bg-body-tertiary p-5 rounded">
    <h1>Cadastro de Categoria</h1>
    <form action="{{route('cadastro.categoria')}}" method="post">
      @csrf
      <div class="mb-3">
        <label for="descricao" class="form-label">Descrição da Categoria</label>
        <input type="text" class="form-control" name="descricao" id="descricao">
      </div>      
      <a href="{{URL::previous()}}" class="btn btn-secondary">Voltar</a>
      <button type="submit" class="btn btn-success">Salvar</button>
    </form>
  </div>
</main>
@endsection