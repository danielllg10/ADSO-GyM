<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
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
      <a href="{{route('login')}}" class="btn-cuenta" target="_blank">Cuenta</a>
  </nav>
  <div class="nav-bar" id="nav-bar"><i class="fa-solid fa-bars"></i></div>
</header>
</header>
  <body>
    <div class="contenedor">
      <div class="caja">
        <div class="titulo"><span>Inicio de Sesion</span></div>
        <form action="/pag_dashboard">
          <div class="fila">
            <i class="fas fa-user"></i>
            <input type="email " name="email" placeholder="Correo electronico" required>
          </div>
          <div class="fila">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" placeholder="Contrasea" required>
          </div>
          <div class="fila boton">
            <input type="submit" value= "  Entra"  >
          </div>
          <div class="signup-link">No tienes cuenta creada? <a class="crear" href="{{route('register')}}">Crea una aqui</a></div>
        </form>
      </div>
    </div>

  </body>
</html>