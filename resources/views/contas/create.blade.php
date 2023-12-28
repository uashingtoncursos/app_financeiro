@extends('site')

@section('section')
<main class="container m-5">
  <div class="bg-body-tertiary p-5 rounded">
    <h1>Cadastro de Conta</h1>
    <form action="{{route('cadastro.conta')}}" method="post">
      @csrf
      <div class="mb-3">
        <label for="descricao" class="form-label">Descrição</label>
        <input type="text" class="form-control" name="descricao" id="descricao">
      </div>

      <div class="mb-3">
        <label for="id_pessoa" class="form-label">Destino/Origem</label>
        <select class="form-control" name="id_pessoa" id="id_pessoa">
          @foreach($pessoas as $pessoa)
          <option value="{{$pessoa['id']}}">{{$pessoa['nome']}}</option>
          @endforeach
        </select>
      </div>

      <div class="mb-3">
        <label for="id_categoria" class="form-label">Categoria da Conta</label>
        <select class="form-control" name="id_categoria" id="id_categoria">
          @foreach($categorias as $categoria)
          <option value="{{$categoria['id']}}">{{$categoria['descricao']}}</option>
          @endforeach
        </select>
      </div>

      <div class="mb-3">
        <label for="data_vencimento" class="form-label">Data Vencimetno</label>
        <input type="date" class="form-control" name="data_vencimento" id="data_vencimento">
      </div>
      <div class="mb-3">
        <label for="data_pagamento" class="form-label">Data Pagamento</label>
        <input type="date" class="form-control" name="data_pagamento" id="data_pagamento">
      </div>

      <div class="mb-3">
        <label for="tipo" class="form-label">Tipo</label>
        <select class="form-control" name="tipo" id="tipo">
          <option value="P">Pagar</option>
          <option value="R">Receber</option>
        </select>
      </div>
      <div class="mb-3">
        <label for="valor" class="form-label">Valor da Conta R$</label>
        <input type="number" class="form-control" name="valor" id="valor">
      </div>
      <a href="{{URL::previous()}}" class="btn btn-secondary">Voltar</a>
      <button type="submit" class="btn btn-success">Salvar</button>
    </form>
  </div>
</main>
@endsection