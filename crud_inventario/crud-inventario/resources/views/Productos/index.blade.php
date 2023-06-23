@extends('layouts.app')
@section('content')
<div class="container">


@if (Session::has('mensaje'))

<div class="alert alert-success alert-dismissible" role="alert">
{{ Session::get('mensaje')}}
<button type="button" class="close" data-dismiss="alert" aria-label="close">
    <span aria-hidden="true">&times;</span>
</button>
</div>

@endif




<a href="{{ url('Productos/create')}}" class="btn btn-success" > Registrar nuevo producto </a>
<br/>
<br/>
<table class="table table-dark">
    <thead class="thead-dark">
        <tr>
            <th>#</th>
            <th>Foto del producto</th>
            <th>Nombre del producto</th>
            <th>Descripcion del producto</th>
            <th>Precio del producto</th>
            <th>Stock del producto</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($Productos as $producto)
        <tr>
            <td>{{ $Productos->id }}</td>

            <td>
                <img src="{{asset('storage').'/'.$producto->Foto}}" width="100" alt="">
                {{ $Productos->Foto }}
            </td>

            <td>{{ $Productos->NOMBRE }}</td>
            <td>{{ $Productos->DESCRIPCION }}</td>
            <td>{{ $Productos->PRECIO }}</td>
            <td>{{ $Productos->STOCK }}</td>
            <td>
            
            <a href="{{ url('/Productos/'.$Productos->id.'/edit')}}" class="btn btn-warning">
            </a> 
            
            <form action="{{url('/Productos/'.$Productos->id) }}" class="d-inline" method="post">
            @csrf
            {{ method_field('DELETE')}}
            <input class="btn btn-danger" type='submit' onclick="return confirm('¿Borrar?')" value= "Borrar">
            </form>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>
{!! $Productos->links() !!}
</div>
@endsection