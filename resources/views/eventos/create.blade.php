@extends('layouts.app')

@section('title', 'Criar Evento')

@section('content')

    <h1>Crie um Evento</h1>

    <a href="{{ route('eventos-index') }}">Volte ao inicio</a>

    <form action="" method="post">
        @csrf
        <div class="form-group">
            <label for="nomeEvento"></label>
            <input type="text" id="nomeEvento" name="nome" placeholder="Nome do Evento">
        </div>
    </form>

@endsection
