@extends('main')
@section('content')

<div class="form-container">

    <form action="{{ route('produtos.store') }}" method="post"> 
        @csrf
        <h2>Cadastrar Produto</h2>
        
        <div class="form-group">
            <label for="descricao">Descrição</label>
            <input id="descricao" type="text" name="descricao" value="">
        </div>

        <div class="form-group">
            <label for="quantidade">Quantidade</label>
            <input id="quantidade" type="number" name="quantidade" value="">
        </div>

        <div class="form-group">
            <label for="preco">Preço</label>
            <input id="preco" type="number" name="preco" value="">
        </div>

        <button type="submit">Cadastrar</button><br><br>
        
    </form> 
    
    <a href="{{ url()->previous() }}" class="btn-cancelar">Cancelar</a>
</div>


@endsection