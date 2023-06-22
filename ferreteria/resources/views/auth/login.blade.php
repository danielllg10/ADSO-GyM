<!doctype html>
<html lang="en">

<head>
  <title>Inicio sesion - G%M</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/estilo.css">

    <link rel="stylesheet" href="/css/estilo_cuenta.css">

</head>

<header>
  <img src="/img/img_logo.png" alt="">
  <nav>
      <ul>
          <li class="link-seleccionado">
          </liclass><a href="/">Inicio</a></li>
          <li><a href="/pag_productos" target="_blank">Productos</a></li>
      </ul>
      <a href="{{ route('login') }}" class="btn-cuenta" target="_blank">Cuenta</a>
  </nav>
  <div class="nav-bar" id="nav-bar"><i class="fa-solid fa-bars"></i></div>
</header>

<body>
    <section class="h-100 gradient-form" style="background-color: #eee;">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-xl-10">
              <div class="card rounded-3 text-black">
                <div class="row g-0">
                  <div class="col-lg-6">
                    <div class="card-body p-md-5 mx-md-4">
      
                      <div class="text-center">
                        <img src="/img/img_logo.png"
                          style="width: 100px;" alt="logo">
                        <h4 class="mt-1 mb-5 pb-1">¡Tu mejor opcion!</h4>
                      </div>
      
                      <form method="post" action="{{route('login')}}">
                        @csrf
                        <h1>Iniciar sesion</h1>
                        {{-- <p>Correo electronico</p> --}}
      
                        <div class="form-outline mb-4">
                            <label class="form-label" for="form2Example11">Correo</label>
                          <input type="email" name="email" id="form2Example11" class="form-control"
                            placeholder="Ingresa tu email:" required>
                          
                        </div>
      
                        <div class="form-outline mb-4">
                            <label class="form-label" for="form2Example22">Contraseña</label>
                          <input type="password" name="password" id="form2Example22" class="form-control" placeholder="Ingresa tu contraseña:" required>
                          
                        </div>
      
                        <div class="text-center pt-1 mb-5 pb-1">
                          <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit">Ingresar</button>
                          
                        </div>
      
                        <div class="d-flex align-items-center justify-content-center pb-4">
                          <p class="mb-0 me-2">No tienes cuenta?</p>
                          <a href="{{route('register')}}" class="btn btn-outline-danger">Crear cuenta</a>
                        </div>
      
                      </form>
      
                    </div>
                  </div>
                  <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                    <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                      <h1 class="mb-4">Ferreteria G&M</h1>
                      <h5>¿Listo para comenzar? Ingresa tus credenciales a continuación y descubre todo lo que nuestra ferretería 
                        tiene para ofrecerte. ¡Gracias por elegirnos!</h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>