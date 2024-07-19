@extends('layouts.app')

@section('title', 'Eventos')

@section('content')

    <h1>Todos os Eventos</h1>

    <a href="{{ route('eventos-create') }}">Crie um Evento</a>

    @foreach ($eventos as $evento)
        <h2><a href="/eventos/{{ $evento->id }}">{{ $evento->nome }}</a></h2>
    @endforeach

@endsection
