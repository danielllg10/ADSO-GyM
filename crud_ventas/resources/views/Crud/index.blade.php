@extends('base.base')

@section('title')
    crud de ventas
@endsection

@section('content')
    <div class="d-flex justify-content-center pt-5">
        <form method="POST">
            @if (session()->has('completo'))
                <div class="alert alert-success" role="alert">
                    {{ session()->get('completo') }}
                </div>
            @endif

            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre</label>
                <input value="{{ old('name') }}" type="text" class="form-control" name="name" placeholder="Nombre ">
                @error('name')
                    <div class="form-text">{{ $message }}</div>
                @enderror
                <div class="form-text">We'll never share your email with anyone else.</div>
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">descripcion</label>
                <textarea cols="2" class="form-control" name="description" placeholder="Escribe la descripcion del pedido">{{ old('description') }}</textarea>
                @error('description')
                    <div class="form-text">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Fecha</label>
                <input value="{{ old('date') }}" type="date" class="form-control" name="date">
                @error('date')
                    <div class="form-text">{{ $message }}</div>
                @enderror
            </div>
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </form>
    </div>
    <div class="container p-5">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($cruds as $crud )
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
                @endforeach


            </tbody>
        </table>
    </div>
@endsection
