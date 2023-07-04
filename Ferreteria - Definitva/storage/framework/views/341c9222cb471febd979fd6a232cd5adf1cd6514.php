<!doctype html>
<html lang="en">

<head>
    <title><?php echo e($modo); ?> Producto</title>
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
                <h1> <?php echo e($modo); ?> producto</h1>
            </div>
            <div class="form-group">
                <label for="Nombre"> Nombre del producto </label>
                <input type="text" class="form-control" name="Nombre"
                    value="<?php echo e(isset($producto->Nombre) ? $producto->Nombre : old('Nombre')); ?>" id="Nombre" required>
            </div>
            <br>

            <div class="form-group">
                <label for="Descripcion"> Descripcion del producto</label>
                <input type="text" class="form-control" name="Descripcion"
                    value="<?php echo e(isset($producto->Descripcion) ? $producto->Descripcion : old('Descripcion')); ?>"
                    id="Descripcion" required>
            </div>
            <br>

            <div class="form-group">
                <label for="Stock"> Stock del producto</label>
                <input type="text" class="form-control" name="Stock"
                    value="<?php echo e(isset($producto->Stock) ? $producto->Stock : old('Stock')); ?>" id="Stock" required>
            </div>
            <br>

            <div class="form-group">
                <label for="Categoria"> Categoria del producto</label>
                <input type="text" class="form-control" name="Categoria"
                    value="<?php echo e(isset($producto->Categoria) ? $producto->Categoria : old('Categoria')); ?>" id="Categoria"
                    required>
            </div>
            <br>

            <div class="form-group">
                <label for="Precio"> Precio del producto</label>
                <input type="text" class="form-control" name="Precio"
                    value="<?php echo e(isset($producto->Precio) ? $producto->Precio : old('Precio')); ?>" id="Precio" required>
            </div>
            <br>

            <div class="d-flex justify-content-center">
                <input class="btn btn-success" type="submit" value="<?php echo e($modo); ?> datos">
            </div>
            <br>
            <div class="d-flex justify-content-center">
                <a class="btn btn-primary" href="<?php echo e(url('/pag_dash_productos/')); ?>">Regresar </a>
            </div>





            <br>

        </div>
    </div>
</body>

</html>





<?php /**PATH C:\xampp\htdocs\daniel pag\Ferreteria\resources\views/other_views/submenudashboar/dashboarproductos/formulario.blade.php ENDPATH**/ ?>