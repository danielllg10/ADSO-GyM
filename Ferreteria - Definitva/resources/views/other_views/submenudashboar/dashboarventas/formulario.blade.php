<!doctype html>
<html lang="en">

<head>
    <title>{{ $modo }} ventas</title>
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
                <h1>{{ $modo }} Venta</h1>
            </div>

            <div class="form-group">
                <label for="Nombre">Nombre del cliente</label>
                <input type="text" class="form-control" name="Nombre_Cliente"
                    value="{{ isset($venta->Nombre_Cliente) ? $venta->Nombre_Cliente : '' }} " id="Nombre_Cliente">

            </div>
            <br>

            <div class="form-group">
                <label for="Descripcion">Descripcion</label>
                <input type="text" class="form-control" name="Descripcion"
                    value="{{ isset($venta->Descripcion) ? $venta->Descripcion : '' }} " id="Descripcion">
            </div>
            <br>

            <div class="form-group">
                <label for="Categoria">Categoria del producto</label>
                <input type="text" class="form-control" name="Categoria"
                    value="{{ isset($venta->Categoria) ? $venta->Categoria : '' }}" id="Categoria">
            </div>
            <br>

            <div class="form-group">
                <label for="Precio">Precio del producto</label>
                <input type="text" class="form-control" name="Precio"
                    value="{{ isset($venta->Precio) ? $venta->Precio : '' }}" id="Precio">
            </div>
            <br>
            <div class="form-group">
                <label for="Cantidad">Cantidad del producto</label>
                <input type="text" class="form-control" name="Cantidad"
                    value="{{ isset($venta->Cantidad) ? $venta->Cantidad : '' }}" id="Cantidad">
            </div>

            <br>
            <div class="d-flex justify-content-center">
                <input class="btn btn-success" type="submit" value="{{ $modo }} venta">
            </div>
            <br>
            <div class="d-flex justify-content-center">
                <a class="btn btn-primary" href="{{ url('/pag_dash_ventas/') }}">Regresar</a>
            </div>
        </div>

    </div>
</body>

</html>
