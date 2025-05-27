@extends('main')
@section('content')

<div class="form-container">

    <form action="{{ route('turnos.store') }}" method="post"> 
        @csrf
        <h2>Cadastrar Turno</h2>
        
        <div class="form-group">
            <label for="nome">Nome</label>
            <input id="nome" type="text" name="nome" value="">
        </div>

        <button type="submit">Cadastrar</button><br><br>
                
    </form> 

     <a href="{{ url()->previous() }}" class="btn-cancelar">Cancelar</a>

</div>


@endsection