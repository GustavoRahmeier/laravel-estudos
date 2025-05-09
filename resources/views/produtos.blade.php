@extends('main')
@section('content')


@if (session()->has('message'))
<div>
    {{ session()->get('message') }}
</div>
@endif

<table>

    <tr>
        <th>Descrição</th>
        <th>Preço</th>
        <th>Quantidade</th>
        <th>Ações</th>
    </tr>

    @foreach ($produtos as $produto)

    <tr>
        <td>{{ $produto->descricao }} </td>
        <td> R$ {{ $produto->preco }} </td>
        <td>{{ $produto->quantidade }}</td>
        
        <td> <a href="{{ route('produtos.show', ['produto' => $produto->id ]) }}">Mostrar Produto</a>
            <a href="{{ route('produtos.edit', ['produto' => $produto->id ]) }}">Editar Produto</a>
        </td>
    </tr>

    @endforeach
</table>

<a href="{{ route('produtos.create') }}">Criar Produto</a>
<a href="{{ route('menu') }}" >VOLTAR</a>

@endsection