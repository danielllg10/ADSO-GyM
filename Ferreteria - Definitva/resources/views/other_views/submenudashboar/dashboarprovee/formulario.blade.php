<!doctype html>
<html lang="en">

<head>
    <title>{{ $modo }} Proveedor</title>
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
                <h1>{{ $modo }} proveedor</h1>
            </div>
            <div class="form-group">
                <label for="Nombre">Nombre del proveedor</label>
                <br>
                <input type="text"  class="form-control" name="Nombre_Proveedor"
                    value="{{ isset($proveedor->Nombre_Proveedor) ? $proveedor->Nombre_Proveedor : '' }} "
                    id="Nombre_Proveedor">
            </div>
            <br>
            <div class="form-group">
                <label for="Descripcion">Correo</label>
                <br>
                <input type="text"  class="form-control" name="Correo" value="{{ isset($proveedor->Correo) ? $proveedor->Correo : '' }} "
                    id="Correo">
            </div>
            <br>
            <div class="form-group">
                <label for="Categoria">Telefono</label>
                <br>
                <input type="text"  class="form-control" name="Telefono"
                    value="{{ isset($proveedor->Telefono) ? $proveedor->Telefono : '' }}" id="Telefono">
            </div>
            <br>
            <div class="form-group">
                <label for="Precio">Categoria</label>
                <br>
                <input type="text"  class="form-control" name="Categoria"
                    value="{{ isset($proveedor->Categoria) ? $proveedor->Categoria : '' }}" id="Categoria">
            </div>
            <br>
            <div class="d-flex justify-content-center">
                <input class="btn btn-success" type="submit" value="{{ $modo }} proveedor nuevo">
            </div>
            <br>
            <div class="d-flex justify-content-center">
                <a class="btn btn-primary btn-lg" href="{{ url('/pag_dash_provee/') }}">Regresar</a>
            </div>
        </div>
    </div>



</body>

</html>




