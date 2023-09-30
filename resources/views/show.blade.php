@extends('layouts.template')

@section('title')
    Mostrar Árbol
@endsection

@section('header')
    Mostrar Árbol
@endsection

@section('body')
    <form action="{{ route('trees.destroy', $tree) }}" method="POST">
        @csrf
        @method('DELETE')
        <div>
            <label for="name">Nombre: </label>
            <br>
            {{ $tree->name }}
        </div>
        <div>
            <label for="specie">Especie:</label>
            <br>
            {{ $tree->specie }}
        </div>
        <div>
            <label for="description">Descripción: </label>
            <br>
            <textarea name="description" cols="30" rows="10">{{ $tree->description }}</textarea>
        </div>

        <div>
            <a href="{{ route('trees.edit', $tree) }}">Editar</a>
            <a href="{{ route('trees.index') }}">Volver</a>
            <button type="submit">Eliminar</button>
        </div>
    </form>
@endsection
