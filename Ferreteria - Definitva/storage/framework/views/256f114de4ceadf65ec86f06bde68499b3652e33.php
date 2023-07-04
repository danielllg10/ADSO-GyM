<!doctype html>
<html lang="en">

<head>
    <title><?php echo e($modo); ?> ventas</title>
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
                <h1><?php echo e($modo); ?> Venta</h1>
            </div>

            <div class="form-group">
                <label for="Nombre">Nombre del cliente</label>
                <input type="text" class="form-control" name="Nombre_Cliente"
                    value="<?php echo e(isset($venta->Nombre_Cliente) ? $venta->Nombre_Cliente : ''); ?> " id="Nombre_Cliente">

            </div>
            <br>

            <div class="form-group">
                <label for="Descripcion">Descripcion</label>
                <input type="text" class="form-control" name="Descripcion"
                    value="<?php echo e(isset($venta->Descripcion) ? $venta->Descripcion : ''); ?> " id="Descripcion">
            </div>
            <br>

            <div class="form-group">
                <label for="Categoria">Categoria del producto</label>
                <input type="text" class="form-control" name="Categoria"
                    value="<?php echo e(isset($venta->Categoria) ? $venta->Categoria : ''); ?>" id="Categoria">
            </div>
            <br>

            <div class="form-group">
                <label for="Precio">Precio del producto</label>
                <input type="text" class="form-control" name="Precio"
                    value="<?php echo e(isset($venta->Precio) ? $venta->Precio : ''); ?>" id="Precio">
            </div>
            <br>
            <div class="form-group">
                <label for="Cantidad">Cantidad del producto</label>
                <input type="text" class="form-control" name="Cantidad"
                    value="<?php echo e(isset($venta->Cantidad) ? $venta->Cantidad : ''); ?>" id="Cantidad">
            </div>

            <br>
            <div class="d-flex justify-content-center">
                <input class="btn btn-success" type="submit" value="<?php echo e($modo); ?> venta">
            </div>
            <br>
            <div class="d-flex justify-content-center">
                <a class="btn btn-primary" href="<?php echo e(url('/pag_dash_ventas/')); ?>">Regresar</a>
            </div>
        </div>

    </div>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\daniel pag\Ferreteria\resources\views/other_views/submenudashboar/dashboarventas/formulario.blade.php ENDPATH**/ ?>