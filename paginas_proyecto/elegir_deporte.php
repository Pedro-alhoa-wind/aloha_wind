<!DOCTYPE html>
<html lang="es">
<head>

    <!-- Etiquetas meta requeridas -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="/libls/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!--Esta es mi carpeta de estilo-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Poppins&family=Quicksand:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css_proyecto/elegir_deporte.css">
    

    <title>Alhoa-Wind</title>
</head>
<body>
    <!-- Cabecera -->
    
            <div class="container-fluid">
              <div class="row">
                  <div class="col-md-offset-2">
                      <div class="d-flex justify-content-between align-items-center">
                          <div class="">
                            <a href="/index.php">
                              <img src="/assets/imagenes/logo_aloha_wind.png" alt="logo" style="height: 6rem;">
                            </a>
                          </div>
                          <div class="">
                            <a href="/login/iniciar_sesion.php">
                              <button type="button" class="btn-lg btn-primary">SALIR</button>
                            </a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
        
  
    <!-- Cuerpo -->
    <div class="row row-cols-1 row-cols-md-2 g-4">

      <!-- SURF -->

        <div class="col">
          <div class="card">
            <div class="row justify-content-end">
              <div class="col-md-9 ">
                 <p class="fs-2 text-md-center text-warning bg-dark">SURF</p>
              </div>
            </div>

            <div class="row">
              <div class="col-md-4">
              <img src="/assets/imagenes/surf redondo.png" class="card-img-top p-md-0" alt="surf">
              </div>
              <div class="col-md-8" style="font-family: 'Montserrat', sans-serif;">
                <p class="text-xl-center fs-4 fw-bold fst-italic">Aquí podras reservar tus clases o alquilar tu material duro.</p>
              </div>

            </div>

            <div class="card-body">
              <div class="row justify-content-md-end">
                <div class="col-md-4">
                  <a href="/paginas_proyecto/paginas_reserva/reserva_surf.html">
                    <button type="button" class="btn btn-primary"> RESERVAR</button>
                  </a> 
                </div>

                <div class="col-md-4">
                  <div class="boton-surf-reserva-clase">
                    <a href="/paginas_proyecto/paginas_alquiler/alquiler_surf.html">
                      <button type="button" class="btn btn-primary"> ALQUILER</button>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- WINDSURF -->

        <div class="col">
          <div class="card">
            <div class="row justify-content-end">
              <div class="col-md-9 ">
                 <p class="fs-2 text-md-center text-warning bg-dark">WINDSURF</p>
              </div>
            </div>

            <div class="row">
              <div class="col-md-4">
              <img src="/assets/imagenes/windsurf redondo.png" class="card-img-top p-md-0" alt="windsurf">
              </div>
              <div class="col-md-8" style="font-family: 'Montserrat', sans-serif;">
                <p class="text-xl-center fs-4 fw-bold fst-italic">Aquí podras reservar tus clases o alquilar tu material duro.</p>
              </div>
            </div>

            <div class="card-body">
              <div class="row justify-content-md-end">
                <div class="col-4">
                  <div class="boton-windsurf-reserva-clase">
                    <a href="/paginas_proyecto/paginas_reserva/reserva_windsurf.html">
                      <button type="button" class="btn btn-primary"> RESERVAR</button>
                    </a>
                    </div>
                </div>
    
                <div class="col-md-4">
                  <div class="boton-windsurf-reserva-clase">
                    <a href="/paginas_proyecto/paginas_alquiler/alquiler_windsurf.html">
                      <button type="button" class="btn btn-primary"> ALQUILER</button>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        
    
     <!-- Pie -->

    <div class="container">
      <footer class="py-3 my-4">
        <ul class="nav justify-content-center border-bottom pb-3 mb-3">
        </ul>
        <p class="text-center text-muted fs-5 fst-italic">Copyright © 2022 Aloha-Wind by Pedro Sánchez Palomino</p>
      </footer>
    </div>

    
    <script src="/libls/bootstrap/js/bootstrap.bundle.min.js"></script> 
</body>
</html>