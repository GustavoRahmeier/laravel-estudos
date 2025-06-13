@extends('main')
@section('content')

@if (session()->has('message'))
    <div>
        {{ session()->get('message') }}
    </div>
@endif

<table>
    <tr>
        <th>Nome</th>
        <th>Ações</th>
    </tr>

    @foreach ($turnos as $turno)

    <tr>
        <td>{{ $turno->nome }} </td>
        
        <td> <a href="{{ route('turnos.show', ['turno' => $turno->id ]) }}">Mostrar turno</a>
            <a href="{{ route('turnos.edit', ['turno' => $turno->id ]) }}">Editar turno</a>
        </td>
    </tr>

    @endforeach
 
</table>

<a href="{{ route('turnos.create') }}">Criar Turno</a>
<a href="{{ route('menu') }}" >VOLTAR</a>

@endsection