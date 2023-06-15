<!-- resources/views/productos/show.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Detalle del Producto</h1>

    <table class="table">
        <tr>
            <th>ID:</th>
            <td>{{ $producto->id }}</td>
        </tr>
        <tr>
            <th>Nombre:</th>
            <td>{{ $producto->nombre }}</td>
        </tr>
        <tr>
            <th>Cantidad:</th>
            <td>{{ $producto->cantidad }}</td>
        </tr>
    </table>

    <a href="{{ route('productos.edit', $producto->id) }}" class="btn btn-primary">Editar</a>

    <form action="{{ route('productos.destroy', $producto->id) }}" method="POST" class="d-inline">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de eliminar este producto?')">Eliminar</button>
    </form>
@endsection