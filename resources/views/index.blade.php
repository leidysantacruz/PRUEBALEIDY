
@extends('layouts.app')

@section('content')
    <h1>Lista de Libros</h1>

    <ul>
        @foreach ($libros as $libro)
            <li>{{ $libro->titulo }} - {{ $libro->autor }}</li>
        @endforeach
    </ul>
@endsection
