<!doctype html>
<html lang="en">

<head>
    <title>{{ $modo }} Producto</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
    <div class="justify-content-center align-items-center p-5 vh-80">
        <div class="border p-5">
            <div class="text-center">
                <h1> {{ $modo }} producto</h1>
            </div>
            <div class="form-group">
                <label for="Nombre"> Nombre del producto </label>
                <input type="text" class="form-control" name="Nombre"
                    value="{{ isset($producto->Nombre) ? $producto->Nombre : old('Nombre') }}" id="Nombre" required>
            </div>
            <br>

            <div class="form-group">
                <label for="Descripcion"> Descripcion del producto</label>
                <input type="text" class="form-control" name="Descripcion"
                    value="{{ isset($producto->Descripcion) ? $producto->Descripcion : old('Descripcion') }}"
                    id="Descripcion" required>
            </div>
            <br>

            <div class="form-group">
                <label for="Stock"> Stock del producto</label>
                <input type="text" class="form-control" name="Stock"
                    value="{{ isset($producto->Stock) ? $producto->Stock : old('Stock') }}" id="Stock" required>
            </div>
            <br>

            <div class="form-group">
                <label for="Categoria"> Categoria del producto</label>
                <input type="text" class="form-control" name="Categoria"
                    value="{{ isset($producto->Categoria) ? $producto->Categoria : old('Categoria') }}" id="Categoria"
                    required>
            </div>
            <br>

            <div class="form-group">
                <label for="Precio"> Precio del producto</label>
                <input type="text" class="form-control" name="Precio"
                    value="{{ isset($producto->Precio) ? $producto->Precio : old('Precio') }}" id="Precio" required>
            </div>
            <br>

            <div class="d-flex justify-content-center">
                <input class="btn btn-success" type="submit" value="{{ $modo }} datos">
            </div>
            <br>
            <div class="d-flex justify-content-center">
                <a class="btn btn-primary" href="{{ url('/pag_dash_productos/') }}">Regresar </a>
            </div>





            <br>

        </div>
    </div>
</body>

</html>





