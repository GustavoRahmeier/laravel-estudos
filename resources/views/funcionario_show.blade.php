@extends('main')

@section('content')

<section class="section-container-show">
        
    <div class="dados-funcionario">
        <h2>Dados do Funcionário</h2>
        <table>
            <tr>
                <th>Campo</th>
                <th>Valor</th>
            </tr>
            <tr>
                <td>Nome</td>
                <td>{{$funcionario->nome}}</td>
            </tr>
            <tr>
                <td>Idade</td>
                <td>{{$funcionario->idade}}</td>
            </tr>
            <tr>
                <td>Gênero</td>
                <td>{{$funcionario->genero}}</td>
            </tr>
            <tr>
                <td>Salário</td>
                <td>{{$funcionario->salario}}</td>
            </tr>
        </table>
        @foreach ($funcionario->turnos as $turno)
            <b>{{$turno->nome}}</b>
        @endforeach

    </div>

    <form class="form-container-show" action="{{ route('funcionarios.destroy', ['funcionario' => $funcionario->id]) }}" method="POST">
        @csrf
        <input type="hidden" name="_method" value="DELETE">
        <div style="display: flex; gap: 10px; align-items: center;">
            <a href="{{ route('funcionarios.index') }}" class="btn-voltar">VOLTAR</a>
            <button class="delete-button" type="submit">APAGAR</button>
        </div>
    </form>
</section>

@endsection
