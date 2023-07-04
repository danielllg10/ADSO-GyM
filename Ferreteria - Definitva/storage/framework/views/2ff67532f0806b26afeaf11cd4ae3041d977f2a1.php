<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/estilo_dashboard.css">
    <script src="/js/pag_dashboard.js" async></script>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Dashboard - Ferreteria G&M</title>
</head>

<body>
    <nav>
        <div class="logo-name">
            <div class="logo-image">
                <img src="/img/img_logo.png" alt="">
            </div>

            <span class="logo_name">Ferreteria<br>G&M</span>
        </div>

        <div class="menu-items">
            <ul class="nav-links">
                <li><a href="<?php echo e(route('home')); ?>">
                        <i class="fa-solid fa-map"></i>
                        <span class="link-name">Dashboard</span>
                    </a></li>
                <li><a href="/pag_dash_provee">
                        <i class="fa-solid fa-truck-fast"></i>
                        <span class="link-name">Proveedores</span>
                    </a></li>
                <li><a href="/pag_dash_productos">
                        <i class="fa-brands fa-product-hunt"></i>
                        <span class="link-name">Productos</span>
                    </a></li>
                <li><a href="/pag_dash_ventas">
                        <i class="fa-brands fa-product-hunt"></i>
                        <span class="link-name">Ventas</span>
                    </a></li>
                <li><a href="/pag_error404" target="_blank">
                        <i class="fa-sharp fa-solid fa-square-xmark"></i>
                        <span class="link-name">Error 404</span>
                    </a></li>
                <li><a href="/pag_error500" target="_blank">
                        <i class="fa-sharp fa-solid fa-square-xmark"></i>
                        <span class="link-name">Error 500</span>
                    </a></li>
            </ul>

            <ul class="logout-mode">
                <li><div aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                        onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        <?php echo e(__('Logout')); ?>

                    </a>
    
                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                        <?php echo csrf_field(); ?>
                    </form>
                </div></li>

                <li class="mode">
                    <a href="#">
                        <i class="uil uil-moon"></i>
                        <span class="link-name">Noche</span>
                    </a>

                    <div class="mode-toggle">
                        <span class="switch"></span>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <section class="dashboard">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>

            

            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                    onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    <?php echo e(__('Logout')); ?>

                </a>

                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                    <?php echo csrf_field(); ?>
                </form>
            </div>
        </div>

        <div class="dash-content">
            <div class="overview">
                <div class="activity">
                    <div class="title">
                        <i class="fa-solid fa-list"></i>
                        <span class="text">Lista de Ventas</span>
                    </div>
                    <div class="container">
                        <?php if(session()->has('mensaje')): ?>
                        <div class="alert alert-primary" role="alert">
                            <?php echo e(session()->get('mensaje')); ?>

                        </div>
                    <?php endif; ?>
                        <a class="btn btn-outline-success" href="<?php echo e(url('/pag_dash_ventas/create')); ?>">Registrar una
                            Venta</a>
                        <a class="btn btn-outline-primary" href="<?php echo e(url('/pag_dash_ventas/pdf')); ?>">Generar
                            informes</a>
                        <br>
                        <br>

                        <div class="d-flex justify-content-between my-2">
                            
                            <table class="table table-light">
                                <thead class="thead-light">
                                    <tr>
                                        <th>#</th>
                                        <th>Nombre del cliente</th>
                                        <th>Descripcion</th>
                                        <th>Categoria</th>
                                        <th>Precio del producto</th>
                                        <th>Unidades</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>


                                <tbody>

                                    <?php $__currentLoopData = $ventas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $venta): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($venta->id); ?></td>
                                            <td><?php echo e($venta->Nombre_Cliente); ?></td>
                                            <td><?php echo e($venta->Descripcion); ?></td>
                                            <td><?php echo e($venta->Categoria); ?></td>
                                            <td><?php echo e($venta->Precio); ?></td>
                                            <td><?php echo e($venta->Cantidad); ?></td>
                                            <td>

                                                <a class="btn btn-warning"
                                                    href="<?php echo e(url('/pag_dash_ventas/' . $venta->id . '/edit')); ?>">
                                                    Editar
                                                </a>



                                                <form action="<?php echo e(url('/pag_dash_ventas/' . $venta->id)); ?>"
                                                    class="d-inline"
                                                    method="POST">
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo e(method_field('DELETE')); ?>

                                                    <button class="btn btn-danger" type="submit"
                                                        onclick="return confirm('¿deseas eliminar esta venta?')">Borrar
                                                        venta</button>
                                                    
                                                </form>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                           

                    </div>
                </div>
    </section>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\daniel pag\Ferreteria\resources\views/other_views/submenudashboar/dashboarventas/pag_dash_ventas.blade.php ENDPATH**/ ?>