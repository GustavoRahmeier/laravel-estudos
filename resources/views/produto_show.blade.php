@extends('main')

@section('content')

<section class="section-container-show">
    <h2 class="product-title">Produto: {{$produto->descricao}}</h2>
    <form class="form-container-show" action="{{ route('produtos.destroy', ['produto' => $produto->id]) }}" method="POST">
        @csrf
        <input type="hidden" name="_method" value="DELETE">
        
        <button class="delete-button" type="submit">APAGAR</button>
    </form>
</section>

@endsection
