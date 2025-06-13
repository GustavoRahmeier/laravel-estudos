@extends('main')
@section('content')

@if (session()->has('message'))
<div>
    {{ session()->get('message') }}
</div>
@endif

<div class="form-container">

    <form action="{{ route('turnos.update', ['turno' => $turno->id]) }}" method="post">
        @csrf

        <input type="hidden" name="_method" value="PUT">
        <h2>Editar Turno</h2>

        <div class="form-group">
            <label for="nome">Nome</label>
            <input id="nome" type="text" name="nome" value="{{$turno->nome}}">
        </div>

        <button type="submit">Atualizar</button>

    </form>

</div>


@endsection