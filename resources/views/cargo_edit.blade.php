@extends('main')
@section('content')

@if (session()->has('message'))
<div>
    {{ session()->get('message') }}
</div>
@endif

<div class="form-container">

    <form action="{{ route('cargos.update', ['cargo' => $cargo->id]) }}" method="post">
        @csrf

        <input type="hidden" name="_method" value="PUT">
        <h2>Editar Cargo</h2>

        <div class="form-group">
            <label for="setor">Setor</label>
            <input id="setor" type="text" name="setor" value="{{$cargo->setor}}">
        </div>

        <div class="form-group">
            <label for="nivel">Nível</label>
            <input id="nivel" type="number" name="nivel" value="{{$cargo->nivel}}">
        </div>

        <div class="form-group">
            <label for="salario_min">Salário Inicial</label>
            <input id="salario_min" type="number" name="salario_min" value="{{$cargo->salario_min}}">
        </div>

        <div class="form-group">
            <label for="salario_max">Salário Avançado</label>
            <input id="salario_max" type="number" name="salario_max" value="{{$cargo->salario_max}}">
        </div>

        <div class="form-group">
            <label for="descricao">Descricao</label>
            <input id="descricao" type="text" name="descricao" value="{{$cargo->descricao}}">
        </div>

        <button type="submit">Atualizar</button>

    </form>

</div>


@endsection