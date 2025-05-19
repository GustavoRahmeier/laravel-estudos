@extends('main')
@section('content')

@if (session()->has('message'))
    <div>
        {{ session()->get('message') }}
    </div>
@endif

<table>
    <tr>
        <th>Setor</th>
        <th>Nível</th>
        <th>Salario Mín</th>
        <th>Salario Máx</th>
        <th>Descrição</th>
        <th>Ações</th>
    </tr>

    @foreach ($cargos as $cargo)

    <tr>
        <td>{{ $cargo->setor }} </td>
        <td>{{ $cargo->nivel }} </td>
        <td> R$ {{ $cargo->salario_min }}</td>
        <td> R$ {{ $cargo->salario_max }}</td>
        <td>{{ $cargo->descricao }}</td>
        
        <td> <a href="{{ route('cargos.show', ['cargo' => $cargo->id ]) }}">Mostrar Cargo</a>
            <a href="{{ route('cargos.edit', ['cargo' => $cargo->id ]) }}">Editar Cargo</a>
        </td>
    </tr>

    @endforeach
 
</table>

<a href="{{ route('cargos.create') }}">Criar Cargo</a>
<a href="{{ route('menu') }}" >VOLTAR</a>

@endsection