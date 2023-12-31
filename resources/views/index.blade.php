@extends('layouts.template')

@section('title')
    Listado de Árboles
@endsection

@section('header')
    Listado de Árboles
@endsection

@section('body')
    <a href="{{ route('trees.create') }}">Nuevo árbol</a>
    <br>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>NOMBRE</th>
                <th>ESPECIE</th>
                <th>EDITAR</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($trees as $tree)
                <tr>
                    <td>{{ $tree->id }}</td>
                    <td>{{ $tree->name }}</td>
                    <td>{{ $tree->specie }}</td>
                    <td><a href="{{ route('trees.show', $tree) }}">Mostrar</a></td>
                    {{-- <td>
                        <form action="{{ route('trees.destroy', $tree) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Eliminar</button>
                        </form>
                    </td> --}}
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
