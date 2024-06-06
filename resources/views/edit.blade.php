

@extends('layouts.app')

@section('content')
    <h1>Editar Libro</h1>

    <form action="{{ route('libros.update', $libro) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="titulo">Título:</label>
            <input type="text" id="titulo" name="titulo" value="{{ $libro->titulo }}">
        </div>
        <div>
            <label for="autor">Autor:</label>
            <input type="text" id="autor" name="autor" value="{{ $libro->autor }}">
        </div>
        <div>
            <label for="anio_publicacion">Año de Publicación:</label>
            <input type="text" id="anio_publicacion" name="anio_publicacion" value="{{ $libro->anio_publicacion }}">
        </div>
        <button type="submit">Actualizar Libro</button>
    </form>
@endsection
