<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Encode+Sans+Semi+Condensed:100,200,300,400" rel="stylesheet">
    <link rel="stylesheet" href="/css/estilo_error404.css">
    <link rel="stylesheet" href="/css/estilo.css">
    <title>Error 404 - Ferreteria G&M</title>
</head>
<header>
    <img src="/img/img_logo.png" alt="">
    <nav>
        <ul>
            <li><a href="/">Inicio</a></li>
            <li><a href="/pag_productos"  target="_blank">Productos</a></li>
        </ul>
        <a href="{{route('login')}}" class="btn-cuenta" target="_blank">Cuenta</a>
    </nav>
    <div class="nav-bar" id="nav-bar"><i class="fa-solid fa-bars"></i></div>
</header>
<body class="cargando">
  <h1>Error 404</h1>
  <h2>La pagina seleccionada no se encuentra dentro del servidor <b>:(</b></h2>
  <div class="tuercas">
    <div class="tuerca uno">
      <div class="bar"></div>
      <div class="bar"></div>
      <div class="bar"></div>
    </div>
    <div class="tuerca dos">
      <div class="bar"></div>
      <div class="bar"></div>
      <div class="bar"></div>
    </div>
    <div class="tuerca tres">
      <div class="bar"></div>
      <div class="bar"></div>
      <div class="bar"></div>
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

  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
  <script> $(function() {
    setTimeout(function(){
      $('body').removeClass('cargando');
    }, 1000);
  });
</script>
</body>
</html>