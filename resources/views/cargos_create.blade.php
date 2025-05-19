@extends('main')
@section('content')

<div class="form-container">

    <form action="{{ route('cargos.store') }}" method="post"> 
        @csrf
        <h2>Cadastrar Cargo</h2>
        
        <div class="form-group">
            <label for="setor">Setor</label>
            <input id="setor" type="text" name="setor" value="">
        </div>

        <div class="form-group">
            <label for="nivel">Nível</label>
            <input id="nivel" type="number" name="nivel" value="">
        </div>

        <div class="form-group">
            <label for="salario_min">Salário Inicial</label>
            <input id="salario_min" type="number" name="salario_min" value="">
        </div>

        <div class="form-group">
            <label for="salario_max">Salário Avançado</label>
            <input id="salario_max" type="number" name="salario_max" value="">
        </div>

        <div class="form-group">
            <label for="descricao">Descrição</label>
            <input id="descricao" type="text" name="descricao" value="">
        </div>

        <button type="submit">Cadastrar</button><br><br>
                
    </form> 

     <a href="{{ url()->previous() }}" class="btn-cancelar">Cancelar</a>

</div>


@endsection