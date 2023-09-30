@extends('layouts.template')

@section('title')
    Nuevo Árbol
@endsection

@section('header')
    Nuevo Árbol
@endsection

@section('body')
    <form action="{{ route('trees.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">Nombre</label>
            <br>
            <input type="text" name="name">
        </div>
        <div>
            <label for="specie">Especie</label>
            <br>
            <input type="text" name="specie">
        </div>
        <div>
            <label for="description">Descripción</label>
            <br>
            <textarea name="description" cols="30" rows="10"></textarea>
        </div>

        <div>
            <button type="submit">Registrar</button>
            <a href="{{ route('trees.index') }}">Volver</a>
        </div>
    </form>
@endsection
