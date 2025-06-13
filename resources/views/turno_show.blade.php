@extends('main')

@section('content')

<section class="section-container-show">
        
    <div class="dados-turno">
        <h2>Dados do Turno</h2>
        <table>
            <tr>
                <th>Campo</th>
                <th>Valor</th>
            </tr>
            <tr>
                <td>Nome</td>
                <td>{{$turno->nome}}</td>
            </tr>
        </table>
    </div>

    <form class="form-container-show" action="{{ route('turnos.destroy', ['turno' => $turno->id]) }}" method="POST">
        @csrf
        <input type="hidden" name="_method" value="DELETE">
        
        <div style="display: flex; gap: 10px; align-items: center;">
            <a href="{{ route('turnos.index') }}" class="btn-voltar">VOLTAR</a>
            <button class="delete-button" type="submit">APAGAR</button>
        </div>

    </form>
</section>

@endsection
