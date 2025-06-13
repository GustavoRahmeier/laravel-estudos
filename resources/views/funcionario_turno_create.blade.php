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
                        <option value="{{ $funcionario->id }}">{{ $funcionario->nome }}</option>
                    @endforeach
                </select>
            </div>


            <div class="turno-wrapper">
                <label class="turno-title" for="turno">Turnos</label>

                <div class="turno-options">
                    @foreach ($turnos as $turno)
                        <label class="turno-option">
                            <input type="checkbox" name="turnos[]" value="{{ $turno->id }}">
                            <span>{{ $turno->nome }}</span>
                        </label>
                    @endforeach
                </div>
            </div>




            <button type="submit">Cadastrar</button><br><br>

        </form>

        <a href="{{ url()->previous() }}" class="btn-cancelar">Cancelar</a>

    </div>
@endsection
