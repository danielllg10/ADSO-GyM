<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/css/estilo_productos.css">
    <link rel="stylesheet" href="/css/estilo.css">
    <script src="/js/pag_productos.js" async></script>
    <title>Productos - Ferreteria G&M</title>
</head>
<body>
    <header>
        <header>
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
            <nav>
                <ul>
                    <li><a href="/">Inicio</a></li>
                    <li class="link-seleccionado"></liclass><a href="/pag_productos"  target="_blank">Productos</a></li>
                </ul>
                <a href="{{route('login')}}" class="btn-cuenta" target="_blank">Cuenta</a>
            </nav>
            <div class="nav-bar" id="nav-bar"><i class="fa-solid fa-bars"></i></div>
        </header>
    </header>
    <section class="contenedor">
        <div class="contenedor-productos">
            <div class="item">
                <span class="titulo-item">Martillo</span>
                <img src="/img/martillo.jpg" alt="" class="img-item">
                <span class="precio-item">$24.999</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">Cemento</span>
                <img src="/img/cemento.webp" alt="" class="img-item">
                <span class="precio-item">$69.999</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">Aerosol</span>
                <img src="/img/aerosol.webp" alt="" class="img-item">
                <span class="precio-item">$13.999</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">Alicate</span>
                <img src="/img/alicate.jpg" alt="" class="img-item">
                <span class="precio-item">$40.999</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">Palustre</span>
                <img src="/img/palustre.jpg" alt="" class="img-item">
                <span class="precio-item">$14.450</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">Tubos</span>
                <img src="/img/tubos.webp" alt="" class="img-item">
                <span class="precio-item">$22.999</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">Cemento Portland</span>
                <img src="/img/cemento2.jpeg" alt="" class="img-item">
                <span class="precio-item">$129.000</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">Bloque</span>
                <img src="/img/bloque.jpg" alt="" class="img-item">
                <span class="precio-item">$1.400</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">Pintura Protect+</span>
                <img src="/img/pintura.jfif" alt="" class="img-item">
                <span class="precio-item">$265.450</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">Pintura Alfa</span>
                <img src="/img/pintura2.webp" alt="" class="img-item">
                <span class="precio-item">$100.000</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">Destornillador</span>
                <img src="/img/destornillador.jpeg" alt="" class="img-item">
                <span class="precio-item">$4.290</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">Cortafrio</span>
                <img src="/img/cortafrios.webp" alt="" class="img-item">
                <span class="precio-item">$38.399</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
        </div>

        <!-- Maquetacion del Carrito amiguitos -->
        <div class="carrito" id="carrito">
            <div class="header-carrito">
                <h2>Productos seleccionados</h2>
            </div>
            <div class="carrito-productos">
            </div>
            <div class="carrito-total">
                <div class="fila">
                    <strong>Total a pagar:</strong>
                    <span class="carrito-precio-total">
                        $120.000,00
                    </span>
                </div>
                <a class="btn-pagar" href="/pag_pagar" target="_blank">Finalizar y pagar <i class="fa-brands fa-shopify"></i></a> 
            </div>
        </div>
    </section>

    <script>
        let nav_var = document.getElementById("nav-bar");
        let menu_responsive = "oculto";

        nav_var.onclick = function() {
            if (menu_responsive == "oculto") {
                document.querySelector("nav").className = "active";
                menu_responsive = "visible"
            } else {
                document.querySelector("nav").className = "";
                menu_responsive = "oculto";
            }
        }
    </script>
    
</body>
</html>