@extends('site')

@section('section')
<main class="container m-5">
  <div class="bg-body-tertiary p-5 rounded">
    <h1>Exclusão de Pessoa</h1>
    <form action="{{route('pessoas.excluir',['id' => $pessoa->id])}}" method="post">
      @csrf
      @method('DELETE')
      <div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" class="form-control" disabled value="{{$pessoa->nome}}" name="nome" id="nome">
      </div>

      <div class="mb-3">
        <label for="telefone" class="form-label">Telefone</label>
        <input type="text" class="form-control" disabled value="{{$pessoa->telefone}}" name="telefone" id="telefone">
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" disabled value="{{$pessoa->email}}" name="email" id="email">
      </div>
      <div class="mb-3">
        <label for="endereco" class="form-label">Endereço</label>
        <input type="text" class="form-control" disabled value="{{$pessoa->endereco}}" name="endereco" id="endereco">
      </div>
      <div class="mb-3">
        <label for="aniversario" class="form-label">Aniversario</label>
        <input type="date" class="form-control" disabled value="{{$pessoa->aniversario}}" name="aniversario" id="aniversario">
      </div>
      <a href="{{URL::previous()}}" class="btn btn-secondary">Voltar</a>
      <button type="submit" class="btn btn-danger">Excluir</button>
    </form>
  </div>
</main>
@endsection