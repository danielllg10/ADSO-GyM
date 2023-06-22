<!DOCTYPE html>
<html lang="es">
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
                        <span class="link-name">salir</span>
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
            <div class="activity">
                <div class="title">
                    <i class="fa-solid fa-list"></i>
                    <span class="text">Lista de Productos</span>
                </div>

                <div class="activity-data">
                    <div class="data names">
                        <span class="data-title">ID</span>
                        <span class="data-list">#1</span>
                        <span class="data-list">#2</span>
                        <span class="data-list">#3</span>
                        <span class="data-list">#4</span>
                        <span class="data-list">#5</span>
                        <span class="data-list">#6</span>
                        <span class="data-list">#7</span>
                        <span class="data-list">#8</span>
                        <span class="data-list">#9</span>
                        <span class="data-list">#10</span>
                        <span class="data-list">#11</span>
                        <span class="data-list">#12</span>
                    </div>
                    <div class="activity-data">
                        <div class="data names">
                            <span class="data-title">Producto</span>
                            <span class="data-list">Martillo</span>
                            <span class="data-list">Cemento</span>
                            <span class="data-list">Aerosol</span>
                            <span class="data-list">Alicate</span>
                            <span class="data-list">Palustre</span>
                            <span class="data-list">Tubos</span>
                            <span class="data-list">Cemento Portland</span>
                            <span class="data-list">Bloque</span>
                            <span class="data-list">Pintura Protect+</span>
                            <span class="data-list">Pintura Alfa</span>
                            <span class="data-list">Destornillador</span>
                            <span class="data-list">Cortafrio</span>
                        </div>
                        <div class="data names">
                            <span class="data-title">Proveedor</span>
                            <span class="data-list">Home Center</span>
                            <span class="data-list">ARGOS</span>
                            <span class="data-list">Toolcraft</span>
                            <span class="data-list">Home Center</span>
                            <span class="data-list">Home Center</span>
                            <span class="data-list">Home Center</span>
                            <span class="data-list">Portland</span>
                            <span class="data-list">Protect+</span>
                            <span class="data-list">ALFA</span>
                            <span class="data-list">Home Center</span>
                            <span class="data-list">Home Center</span>
                        </div>
                    <div class="data names">
                        <span class="data-title"></span>
                        <span class="data-list"><i class="fa-sharp fa-solid fa-trash"></i></span>
                        <span class="data-list"><i class="fa-sharp fa-solid fa-trash"></i></span>
                        <span class="data-list"><i class="fa-sharp fa-solid fa-trash"></i></span>
                        <span class="data-list"><i class="fa-sharp fa-solid fa-trash"></i></span>
                        <span class="data-list"><i class="fa-sharp fa-solid fa-trash"></i></span>
                        <span class="data-list"><i class="fa-sharp fa-solid fa-trash"></i></span>
                        <span class="data-list"><i class="fa-sharp fa-solid fa-trash"></i></span>
                        <span class="data-list"><i class="fa-sharp fa-solid fa-trash"></i></span>
                        <span class="data-list"><i class="fa-sharp fa-solid fa-trash"></i></span>
                        <span class="data-list"><i class="fa-sharp fa-solid fa-trash"></i></span>
                        <span class="data-list"><i class="fa-sharp fa-solid fa-trash"></i></span>
                        <span class="data-list"><i class="fa-sharp fa-solid fa-trash"></i></span>

                    </div>
                </div>
            </div>

            <div class="activity">
                <div class="title">
                    <i class="fa-solid fa-newspaper"></i>
                    <span class="text">Agregar Producto</span>
                </div>
            <main>
            <form action="" class="formulario">
                <div class="formulario__grupo">
                    <label class="formulario__label">Producto</label>
                    <div class="formulario__grupo-input">
                        <input type="text" class="formulario__input" placeholder="Escribe nombre del producto" required>
                    </div>
                </div>
    
                <div class="formulario__grupo">
                    <label class="formulario__label">Categoria</label>
                    <div class="formulario__grupo-input">
                        <input type="text" class="formulario__input" placeholder="¿Que categoria es?" required>
                    </div>
                </div>
    
                <div class="formulario__grupo">
                    <label class="formulario__label">Precio</label>
                    <div class="formulario__grupo-input">
                        <input type="number" class="formulario__input" placeholder="Escribe el precio" required>
                    </div>
                </div>
                <div class="formulario__grupo">
                    <label class="formulario__label" required>Estado</label>
                    <select required>
                        <option>Publico</option>
                        <option>Privado</option>                   
                        </select>
                    </div>
                </div>

                <div class="formulario__grupo formulario__grupo-btn-enviar">
                    <button type="submit" class="formulario__btn">Guardar producto</button>
                </div>
            </form>
        </main>
        </div>
    </section>
</body>

</html>_