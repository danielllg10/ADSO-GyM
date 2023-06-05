<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="/css/estilo.css">
    <script src="/" ></script>
    <title>ferreteria GYM</title>
</head>
<body>
    <header>
        <img src="/img/img_logo.png" alt="">
        <nav>
            <ul>
                <li class="link-seleccionado"></liclass><a href="/">Inicio</a></li>
                <li><a href="/pag_productos"  target="_blank">Productos</a></li>
            </ul>
            <a href="{{route('login')}}" class="btn-cuenta" target="_blank">Cuenta</a>
        </nav>
        <div class="nav-bar" id="nav-bar"><i class="fa-solid fa-bars"></i></div>
    </header>
</header>

    <section id="inicio">
        <div class="contenido">
            <div class="info">
                <h3><br>Ferreteria G&M</h3>
                <span>¡Somos tu mejor opcion!<br><br><br><br></span>
                <div class="redes">
                    <a href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="https://twitter.com/" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                    <a href="https://www.instagram.com/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                    <a href="https://www.whatsapp.com/?lang=es" target="_blank"><i class="fa-brands fa-whatsapp"></i></a>
                </div>
            </div>

        </div>
        <div class="contenedor-img">
            <div class="imagen">
            </div>
        </div>
    </section>    
    <div class="separador">
        <div class="contenido-separador contenedor">
            <h2>¡Tenemos productos de calidad!</h2>
            <p>Tomate el tiempo de mirar los productos que ofrecemos y que veas la calidad de lo que le ofrecemos 
                a nuestros clientes. <br>
            </p>
        </div>
    </div>

    <div class="mapa">
        <div class="ubicacion">
            <h1>Nuestra ubicacion</h1>
        </div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3977.206374797689!2d-74.14856018456096!3d4.556869396689245!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9f5d6e7aa3c7%3A0x7aa7870ba540c753!2sCl.%2066%20Bis%20Sur%20%2318r2%2C%20Bogot%C3%A1!5e0!3m2!1ses!2sco!4v1679627464201!5m2!1ses!2sco" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
     </div>

    <div class="formulario-contacto contenedor">

        <div class="informacion-contacto">
            <h3>Contacto<br></h3>
            <p>ferretegym@gmail.com <i class="fa-solid fa-square-envelope"></i><br></p>
            <p>+57 321 929 68 95 <i class="fa-solid fa-square-phone-flip"></i><br></p>
                <div class="redes-sociales">
                    <a href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="https://twitter.com/" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                    <a href="https://www.instagram.com/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                    <a href="https://www.whatsapp.com/?lang=es" target="_blank"><i class="fa-brands fa-whatsapp"></i></a>
                </div>
        </div>  
        <form class="formulario">
            <div class="input-formulario">
                <label for="nombre">Nombre</label>
                <input type="text" placeholder="Inserta tu nombre" id="nombre" required>
            </div>
            <div class="input-formulario">
                <label for="apellidos">Apellido</label>
                <input type="text" placeholder="Inserta tu apellido" id="apellidos" required>
            </div>
            <div class="input-formulario">
                <label for="correo">Correo</label>
                <input type="email" placeholder="Inserta tu correo electronico" id="correo" required>
            </div>
            <div class="input-formulario">
                <label for="telefono">Teléfono</label>
                <input type="number" placeholder="Inserta tu telefono" id="telefono" required>
            </div>
            <div class="input-formulario">
                <label for="mensaje">Escribe tu mensaje</label>
                <textarea required></textarea>
            </div>
            <div class="btn-formulario">
                <input type="submit" class="btn-formulario" value="Enviar">
            </div>            
        </form>
    
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