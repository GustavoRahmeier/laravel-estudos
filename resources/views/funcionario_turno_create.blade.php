@extends('main')
@section('content')

<div class="form-container">

    <form action="{{ route('funcionario.turnos.store') }}" method="post">
        @csrf
        <h2>Cadastrar Turno</h2>

        <div class="form-group">
            <label for="funcionario">Funcionario</label>

            <select name="funcionario_id">
                <option value="">Selecione</option>
                @foreach ($funcionarios as $funcionario)
                <option value="{{ $funcionario->id }}">{{$funcionario->nome}}</option>

                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="turno">Turnos</label>


            @foreach ($turnos as $turno)
            <label>
                <input type="checkbox" name="turnos[]" value="{{ $turno->id }}">
                {{ $turno->nome }}
            </label>

            @endforeach

        </div>

        <button type="submit">Cadastrar</button><br><br>

    </form>

    <a href="{{ url()->previous() }}" class="btn-cancelar">Cancelar</a>

</div>


@endsection