@extends('layouts.template')

@section('title')
    Editar Árbol
@endsection

@section('header')
    Editar Árbol
@endsection

@section('body')
    <form action="{{ route('trees.update', $tree) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="name">Nombre</label>
            <br>
            <input type="text" name="name" value="{{ $tree->name }}">
        </div>
        <div>
            <label for="specie">Especie</label>
            <br>
            <input type="text" name="specie" value="{{ $tree->specie }}">
        </div>
        <div>
            <label for="description">Descripción</label>
            <br>
            <textarea name="description" cols="30" rows="10">{{ $tree->description }}</textarea>
        </div>

        <div>
            <button type="submit">Actualizar</button>
            <a href="{{ route('trees.show', $tree) }}">Volver</a>
        </div>
    </form>
@endsection
