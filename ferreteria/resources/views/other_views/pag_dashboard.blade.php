<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/estilo_dashboard.css">
    <script src="/js/pag_dashboard.js" async></script>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                <li><a href="{{route('home')}}">
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
                <li><a href="{{route('login')}}">
                        <i class="uil uil-signout"></i>
                        <span class="link-name">Salir</span>
                    </a></li>

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

            <div class="search-box">
                <i class="uil uil-search"></i>
                <input type="text" placeholder="Escribe una plabara">
            </div>

            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
            
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </div>

        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class="uil uil-tachometer-fast-alt"></i>
                    <span class="text">Dashboard</span>
                </div>

                <div class="boxes">
                    <div class="box box1">
                        <i class="fa-brands fa-shopify"></i>
                        <span class="text">Ventas Recientes</span>
                        <span class="number">394</span>
                    </div>
                    <div class="box box2">
                        <i class="fa-brands fa-product-hunt"></i>
                        <span class="text">Proveedores Activos</span>
                        <span class="number">50</span>
                    </div>
                    <div class="box box3">
                        <i class="fa-solid fa-money-bill"></i>
                        <span class="text">Compras Recientes</span>
                        <span class="number">600</span>
                    </div>
                </div>
            </div>

            <div class="activity">
                <div class="title">
                    <i class="fa-solid fa-list"></i>
                    <span class="text">Actividad reciente</span>
                </div>

                <div class="activity-data">
                    <div class="data names">
                        <span class="data-title">Nombre</span>
                        <span class="data-list">German</span>
                        <span class="data-list">Easy</span>
                        <span class="data-list">El Martillazo</span>
                        <span class="data-list">Nicolas</span>
                        <span class="data-list">Argos</span>
                        <span class="data-list">Home Center</span>
                        <span class="data-list">Daniel</span>
                    </div>
                    <div class="data email">
                        <span class="data-title">Motivo</span>
                        <span class="data-list">Venta</span>
                        <span class="data-list">Compra</span>
                        <span class="data-list">Compra</span>
                        <span class="data-list">Venta</span>
                        <span class="data-list">Compra</span>
                        <span class="data-list">Compra</span>
                        <span class="data-list">Venta</span>
                    </div>
                    <div class="data joined">
                        <span class="data-title">Producto</span>
                        <span class="data-list">Bloque</span>
                        <span class="data-list">Herramienta</span>
                        <span class="data-list">Herramienta</span>
                        <span class="data-list">Tubos</span>
                        <span class="data-list">Cemento</span>
                        <span class="data-list">Tubos</span>
                        <span class="data-list">Bloque</span>
                    </div>
                    <div class="data type">
                        <span class="data-title">Cantidad</span>
                        <span class="data-list">6.500</span>
                        <span class="data-list">4.100</span>
                        <span class="data-list">1.999</span>
                        <span class="data-list">1.000</span>
                        <span class="data-list">2.300</span>
                        <span class="data-list">4.000</span>
                        <span class="data-list">1.234</span>
                    </div>
                    <div class="data status">
                        <span class="data-title">Fecha</span>
                        <span class="data-list">01/01/2023</span>
                        <span class="data-list">08/01/2023</span>
                        <span class="data-list">15/02/2023</span>
                        <span class="data-list">16/02/2023</span>
                        <span class="data-list">20/02/2023</span>
                        <span class="data-list">01/03/2023</span>
                        <span class="data-list">26/03/2023</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
