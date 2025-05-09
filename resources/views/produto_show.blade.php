@extends('main')

@section('content')

<section class="section-container-show">

    <div class="dados-produto">    
        <h2>Dados do Produto</h2>
        <table>
            <tr>
                <th>Campo</th>
                <th>Valor</th>
            </tr>
            <tr>
                <td>Descrição</td>
                <td>{{$produto->descricao}}</td>
            </tr>
            <tr>
                <td>Preço</td>
                <td> R$ {{$produto->preco}}</td>
            </tr>
            <tr>
                <td>Quantidade</td>
                <td>{{$produto->quantidade}}</td>
            </tr>
        </table>
    </div>
        <form class="form-container-show" action="{{ route('produtos.destroy', ['produto' => $produto->id]) }}" method="POST">
            @csrf
            <input type="hidden" name="_method" value="DELETE">
            <div style="display: flex; gap: 10px; align-items: center;">
                <a href="{{ route('produtos.index') }}" class="btn-voltar">VOLTAR</a>
                <button class="delete-button" type="submit">APAGAR</button>
            </div>
        </form>
    
</section>

@endsection
