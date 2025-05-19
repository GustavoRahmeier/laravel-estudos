@extends('main')
@section('content')

@if (session()->has('message'))
<div>
    {{ session()->get('message') }}
</div>
@endif

<div class="form-container">

    <form action="{{ route('funcionarios.update', ['funcionario' => $funcionario->id]) }}" method="post">
        @csrf

        <input type="hidden" name="_method" value="PUT">
        <h2>Editar Funcionario</h2>

        <div class="form-group">
            <label for="nome">Nome</label>
            <input id="nome" type="text" name="nome" value="{{$funcionario->nome}}">
        </div>

        <div class="form-group">
            <label for="idade">Idade</label>
            <input id="idade" type="number" name="idade" value="{{$funcionario->idade}}">
        </div>

        <div class="form-group">
            <label for="genero">Gênero</label>
            <input id="genero" type="text" name="genero" value="{{$funcionario->genero}}">
        </div>

        <div class="form-group">
            <label for="salario">Salário</label>
            <input id="salario" type="text" name="salario" value="{{$funcionario->salario}}">
        </div>

        <button type="submit">Atualizar</button>

    </form>

</div>


@endsection