<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <link rel="stylesheet" href="/css/estilo_cuenta.css">

</head>

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
                      
                      <form action="{{route('register')}} " method="post">
                        @csrf
                      <p>Registro de cuenta</p>
      
                        {{-- <p>Correo electronico</p> --}}
                        <div class="form-outline mb-4">
                            <label class="form-label" for="form2Example11">Nombre</label>
                          <input type="text" name="name" id="form2Example11" class="form-control"
                            placeholder="Escribe tu nombre" />
                          
                        </div>
                        <div class="form-outline mb-4">
                            <label class="form-label" for="form2Example11">Numero de contacto</label>
                          <input type="number" name="contact" id="form2Example11" class="form-control"
                            placeholder="telefono" />
                          
                        </div>
                        <div class="form-outline mb-4">
                            <label class="form-label" for="form2Example11">Fecha de nacimiento</label>
                          <input type="date" name="xd" id="form2Example11" class="form-control"
                            placeholder="" />
                          
                        </div>
                        <div class="form-outline mb-4">
                            <label class="form-label" for="form2Example11">Correo</label>
                          <input type="email" name="email" id="form2Example11" class="form-control"
                            placeholder="Escribe un correo para contactarnos contigo" />
                        </div>

                        <div class="form-outline mb-4">
                            <label class="form-label" for="form2Example22">Contraseña</label>
                          <input type="password" name="password" id="form2Example22" class="form-control" placeholder="contraseña minimo 8 caracteres"/>
                          
                        </div>
                        <div class="form-outline mb-4">
                            <label class="form-label" for="form2Example22">Contraseña</label>
                          <input type="password" name="password_confirmation" id="form2Example22" class="form-control" placeholder="confirmar contraseña" />
                          
                        </div>

                        
      
                        <div class="text-center pt-1 mb-5 pb-1">
                          <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit" >Registrase</button>
                          
                        </div>
                        </form>

                        <div class="d-flex align-items-center justify-content-center pb-4">
                          <p class="mb-0 me-2">Ya tienes cuenta?</p>
                          <a href="{{route('login')}}" class="btn btn-outline-danger">Ingresar</a>
                        </div>
      
                     
      
                    </div>
                  </div>
                  <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                    <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                      <h4 class="mb-4">Ferreteria GYM</h4>
                      <p class="small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
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