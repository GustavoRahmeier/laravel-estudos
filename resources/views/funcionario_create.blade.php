@extends('main')
@section('content')

<div class="form-container">

    <form action="{{ route('funcionarios.store') }}" method="post"> 
        @csrf
        <h2>Cadastrar Funcionario</h2>
        
        <div class="form-group">
            <label for="">Cargos</label>
            <select name="id_cargo">
                <option value="">Selecione</option>
                @foreach ($cargos as $cargo)
                    <option value="{{ $cargo->id }}">{{$cargo->descricao}}</option>

                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="nome">Nome</label>
            <input id="nome" type="text" name="nome" value="">
        </div>

        <div class="form-group">
            <label for="idade">Idade</label>
            <input id="idade" type="number" name="idade" value="">
        </div>

        <div class="form-group">
            <label for="genero">Genero</label>
            <input id="genero" type="text" name="genero" value="">
        </div>

        <div class="form-group">
            <label for="salario">Salario</label>
            <input id="salario" type="number" name="salario" value="">
        </div>

        <button type="submit">Cadastrar</button><br><br>
                
    </form> 

     <a href="{{ url()->previous() }}" class="btn-cancelar">Cancelar</a>

</div>


@endsection