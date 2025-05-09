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
        <th>Idade</th>
        <th>Gênero</th>
        <th>Salário</th>
        <th>Ações</th>
    </tr>

    @foreach ($funcionarios as $funcionario)

    <tr>
        <td>{{ $funcionario->nome }} </td>
        <td>{{ $funcionario->idade }} </td>
        <td>{{ $funcionario->genero }}</td>
        <td> R$ {{ $funcionario->salario }}</td>
        
        <td> <a href="{{ route('funcionarios.show', ['funcionario' => $funcionario->id ]) }}">Mostrar Funcionario</a>
            <a href="{{ route('funcionarios.edit', ['funcionario' => $funcionario->id ]) }}">Editar Funcionario</a>
        </td>
    </tr>

    @endforeach
 
</table>

<a href="{{ route('funcionarios.create') }}">Criar Funcionario</a>
<a href="{{ route('menu') }}" >VOLTAR</a>

@endsection