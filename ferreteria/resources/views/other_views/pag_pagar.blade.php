<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="/css/estilo_pagar.css">
    <link rel="stylesheet" href="/css/estilo.css">
    <title>Pago - Ferreteria G&M</title>
</head>
<body>
        <header>
            <img src="/img/img_logo.png" alt="">
            <nav>
                <ul>
                    <li><a href="/">Inicio</a></li>
                    <li class="link-seleccionado"></liclass><a href="/pag_productos"  target="_blank">Productos</a></li>
                </ul>
                <a href="/pag_cuentas" class="btn-cuenta" target="_blank">Cuenta</a>
            </nav>
            <div class="nav-bar" id="nav-bar"><i class="fa-solid fa-bars"></i></div>
        </header>
    </header>

<div class="container">
   <form action="">
        <div class="row">
            <div class="col">
                <h3 class="titulo">Datos de envio</h3>

                <div class="caja_respuesta">
                    <span>Nombre completo:</span>
                    <input type="text" placeholder="Introduce tu nombre" required>
                </div>
                <div class="caja_respuesta">
                    <span>Telefono:</span>
                    <input type="number" placeholder="Introduce tu numero" required>
                </div>
                <div class="caja_respuesta">
                    <span>Direccion:</span>
                    <input type="text" placeholder="Introduce tu direccion" required>
                </div>
                <div class="caja_respuesta">
                    <span>Pais:</span>
                    <input type="text" placeholder="Introduce tu Pais" required>
                </div>

                <div class="flex">
                    <div class="caja_respuesta">
                        <span>Ciudad:</span>
                        <input type="text" placeholder="Bogota" required>
                    </div>
                    <div class="caja_respuesta">
                        <span>Barrio:</span>
                        <input type="text" placeholder="Chico Norte" required>
                    </div>
                </div>

            </div>

            <div class="col">

                <h3 class="titulo">Metodo de pago</h3>

                <div class="caja_respuesta">
                    <span>Metodos admitidos:</span>
                    <img src="/img/img_tarjetas_pagar.png" alt="">
                </div>
                <div class="caja_respuesta">
                    <span>Propietario de la tarjeta:</span>
                    <input type="text" placeholder="Nombre completo propietario" required>
                </div>
                <div class="caja_respuesta">
                    <span>Numero de la tarjeta:</span>
                    <input type="number" placeholder="Numero de la tarjeta" required>
                </div>
                
                <div class="flex">
                    <div class="caja_respuesta">
                        <span>Cuotas:</span>
                        <input type="number" min="1" max="24" placeholder="¿Cuantas?" required>
                    </div>
                    <div class="caja_respuesta">
                        <span>CVV :</span>
                        <input type="text" placeholder="1234" required>
                    </div>
                </div>
                <div class="caja_respuesta">
                    <span>¿Aceptas terminos y condiciones?</span>
                    <input type="radio" required>
                </div>
            </div>
        </div>
        <input type="submit" value="Finalizar pago" class="submit-btn">
    </form>
</div>    

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