@extends('main')

@section('content')
<div class="container-menu">
    <h2 class="container-menu h2">Menu Principal</h2>
    <div class="card-menu">
        <a href="{{ route('produtos.index') }}" >Listar Produtos</a>
        <a href="{{ route('funcionarios.index') }}" >Listar Funcionários</a>
        <a href="{{ route('cargos.index') }}" >Listar Cargos</a>
    </div>
</div>
@endsection
