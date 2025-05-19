@extends('main')

@section('content')

<section class="section-container-show">
        
    <div class="dados-cargo">
        <h2>Dados do Cargo</h2>
        <table>
            <tr>
                <th>Campo</th>
                <th>Valor</th>
            </tr>
            <tr>
                <td>Setor</td>
                <td>{{$cargo->setor}}</td>
            </tr>
            <tr>
                <td>Nível</td>
                <td>{{$cargo->nivel}}</td>
            </tr>
            <tr>
                <td>Salário Inicial</td>
                <td>{{$cargo->salario_min}}</td>
            </tr>
            <tr>
                <td>Salário Avançado</td>
                <td>{{$cargo->salario_max}}</td>
            </tr>
            <tr>
                <td>Descrição</td>
                <td>{{$cargo->descricao}}</td>
            </tr>
        </table>
    </div>

    <form class="form-container-show" action="{{ route('cargos.destroy', ['cargo' => $cargo->id]) }}" method="POST">
        @csrf
        <input type="hidden" name="_method" value="DELETE">
        
        <div style="display: flex; gap: 10px; align-items: center;">
            <a href="{{ route('cargos.index') }}" class="btn-voltar">VOLTAR</a>
            <button class="delete-button" type="submit">APAGAR</button>
        </div>

    </form>
</section>

@endsection
