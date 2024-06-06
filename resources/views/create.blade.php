

@extends('layouts.app')

@section('content')
    <h1>Crear Libro</h1>

    <form action="{{ route('libros.store') }}" method="POST">
        @csrf
        <div>
            <label for="titulo">Título:</label>
            <input type="text" id="titulo" name="titulo">
        </div>
        <div>
            <label for="autor">Autor:</label>
            <input type="text" id="autor" name="autor">
        </div>
        <div>
            <label for="anio_publicacion">Año de Publicación:</label>
            <input type="text" id="anio_publicacion" name="anio_publicacion">
        </div>
        <button type="submit">Crear Libro</button>
    </form>
@endsection
