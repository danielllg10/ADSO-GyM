<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/estilo_cuenta.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <title>Cuenta - Ferreteria G&M</title>
</head>
<header>
  <img src="/img/img_logo.png" alt="">
  <nav>
      <ul>
          <li class="link-seleccionado"></liclass><a href="/">Inicio</a></li>
          <li><a href="/pag_productos"  target="_blank">Productos</a></li>
          <li><a href="/pag_dashboard"  target="_blank">Dashboard</a></li>
      </ul>
      <a href="/pag_cuentas" class="btn-cuenta" target="_blank">Cuenta</a>
  </nav>
  <div class="nav-bar" id="nav-bar"><i class="fa-solid fa-bars"></i></div>
</header>
</header>
  <body>
    <div class="contenedor">
      <div class="caja">
        <div class="titulo"><span>Registro de Cuenta</span></div>
        <form action="#">
          <div class="fila">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Nombre" required>
          </div>
          <div class="fila">
            <i class="fas fa-envelope-square"></i>
            <input type="email" placeholder="Correo electronico" required>
          </div>
          <div class="fila">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Contrasea" required>
          </div>
          <div class="fila">
            <i class="fas fa-phone-square-alt"></i>
            <input type="number" placeholder="Telefono" required>
          </div>
          <div class="fila">
            <i class="fas fa-calendar-alt"></i>
            <input type="date" placeholder="Fecha nacimiento" required>
          </div>
          <div class="fila">
            <i class="fas fa-address-card"></i>
            <input type="number" placeholder="Edad" required>
          </div>
          <div class="fila boton">
            <input type="submit" value="Registrar">
          </div>
          <div class="signup-link">Ya tienes una cuenta? <a class="crear" href="/html/pag_cuenta.html">Inicia sesion aqui</a></div>
        </form>
      </div>
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
<?php /**PATH C:\xampp\htdocs\ferreteria\resources\views//other_views/pag_registro.blade.php ENDPATH**/ ?>