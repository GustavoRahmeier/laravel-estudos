@extends('main')
@section('content')

@if (session()->has('message'))
<div>
    {{ session()->get('message') }}
</div>
@endif

<div class="form-container">

    <form action="{{ route('produtos.update', ['produto' => $produto->id]) }}" method="post">
        @csrf

        <input type="hidden" name="_method" value="PUT">
        <h2>Editar Produto</h2>

        <div class="form-group">
            <label for="descricao">Descrição</label>
            <input id="descricao" type="text" name="descricao" value="{{$produto->descricao}}">
        </div>

        <div class="form-group">
            <label for="quantidade">Quantidade</label>
            <input id="quantidade" type="number" name="quantidade" value="{{$produto->quantidade}}">
        </div>

        <div class="form-group">
            <label for="preco">Preço</label>
            <input id="preco" type="number" name="preco" value="{{$produto->preco}}">
        </div>

        <button type="submit">Atualizar</button>

    </form>

</div>


@endsection