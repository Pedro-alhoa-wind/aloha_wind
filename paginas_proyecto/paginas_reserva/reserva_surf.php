<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/libls/bootstrap/css/bootstrap.min.css">

    <!-- Bootstrap Datepicker -->
    <link rel="stylesheet" href="/datepicker/css/bootstrap-datepicker3.standalone.min.css">


    <!-- Esta es mis carpetas de estilos -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Poppins&family=Quicksand:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/paginas_proyecto/paginas_reserva/reserva_surf.css">


    <title>Alhoa-Wind</title>
</head>
<body style="background-color: ivory;">

    <!-- Cabecera -->

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-offset-2">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="my-2">
                        <a href="/paginas_proyecto/elegir_deporte.php">
                            <img src="/assets/imagenes/logo_aloha_wind.png" alt="logo" style="height: 7rem;">
                        </a>
                    </div>
                    <div class="my-2">
                        <a href="/login/iniciar_sesion.php">
                            <button type="button" class="btn-lg btn-primary">SALIR</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Body -->

    <div class="container">
        <p class="titulo text-md-center my-5 fs-1 fw-bolder">Selecciona tu reserva de clase Surf</p>
    </div>

    <!-- Elegir el monitor -->
    <form action="" method="post">
        <div class="container-md">
            <div class="">
                <p class="h6"><strong>Elija el monitores:</strong></p><br><br>
                <div class="row">
                    <div class="col-3 text-center">
                        <figure class="figure1">
                            <img src="/assets/imagenes/monitor-1.png" class="rounded-circle img-fluid" width="150px" height="200px" alt="monitor1">
                        </figure>
                        <p style="font-family: Montserrat, Helvetica, sans-serif;">Pepe</p>
                        <input class="form-check-input fs-5" type="radio" name="radio1" id="btn-monitor-radio1" value="opcion1" aria-label="btn-monitor-1">
                    </div>
                    <div class="col-3 text-center">
                        <figure class="figure2">    
                            <img src="/assets/imagenes/monitora-1.png" class="rounded-circle img-fluid" width="150px" height="200px" alt="monitor1">
                        </figure>
                        <p style="font-family: Montserrat, Helvetica, sans-serif;">Maria</p>
                        <input class="form-check-input fs-5" type="radio" name="radio1" id="btn-monitor-radio2" value="opcion2" aria-label="btn-monitor-2">
                    </div>
                    <div class="col-3 text-center">
                        <figure class="figure3">
                            <img src="/assets/imagenes/monitor-2.png" class="rounded-circle img-fluid" width="150px" height="200px" alt="monitor1">
                        </figure>
                        <p style="font-family: Montserrat, Helvetica, sans-serif;">Pablo</p>
                        <input class="form-check-input fs-5" type="radio" name="radio1" id="btn-monitor-radio3" value="opcion3" aria-label="btn-monitor-3">
                    </div>
                    <div class="col-3 text-center">
                        <figure class="figure4">
                            <img src="/assets/imagenes/monitora-2.png" class="rounded-circle img-fluid" width="150px" height="200px" alt="monitor1">
                        </figure>
                        <p style="font-family: Montserrat, Helvetica, sans-serif;">Sofia</p>
                        <input class="form-check-input fs-5" type="radio" name="radio1" id="btn-monitor-radio4" value="opcion4" aria-label="btn-monitor-4">
                    </div>
                </div>
            </div>

            <ul class="nav justify-content-center border-bottom pb-5 mb-3"></ul>

            <!-- Elegir el tipo clase -->

                <p class="h6"><strong>Elija el tipo de clase:</strong></p><br><br>

                <div class="row">
                    <div class="col-6 text-center">
                        <figure>
                            <img src="/assets/imagenes/clase-grupo.jfif" alt="tipo-clase-1" class="rounded-circle img-fluid" style="width: 200px; height: 200px;">
                        </figure>
                        <p style="font-family: Montserrat, Helvetica, sans-serif;">Grupo (max. 4 personas)</p>
                        <input class="form-check-input fs-5" type="radio" name="radio2" id="btn-tipclass-radio1" value="opcion-class-1" aria-label="btn-class-1">
                    </div>

                    <div class="col-6 text-center">
                        <figure>
                            <img src="/assets/imagenes/clase-individual.jfif" alt="tipo-clase-1" class="rounded-circle img-fluid" style="width: 200px; height: 200px;">
                        </figure>
                        <p style="font-family: Montserrat, Helvetica, sans-serif;">Individual</p>
                        <input class="form-check-input fs-5" type="radio" name="radio2" id="btn-tipclass-radio2" value="opcion-class-2" aria-label="btn-class-2">
                    </div>
                </div>
            <ul class="nav justify-content-center border-bottom pb-5 mb-3"></ul>
        </div>

        <!-- Calendario y horas -->

        <div class="container">

            <p class="h6"><strong>Elija el día y la hora:</strong></p><br>
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-5 mb-5" id="datepicker">
                </div>
                
                <div class="col-3">
                        <p class="mb-4">Mañana</p>
                        <p class="h6">10:00</p>
                        <input class="form-check-input fs-5 mb-5" type="radio" name="radio3" id="btn-hora-radio1" value="opcion-hora-1" aria-label="btn-hora-1">
                        <p class="h6">12:00</p>
                        <input class="form-check-input fs-5 mb-3" type="radio" name="radio3" id="btn-hora-radio2" value="opcion-hora-2" aria-label="btn-hora-2">
                </div>
                <div class="col-3">
                    <p class="mb-4">Tarde</p>
                    <p class="h6">16:00</p>
                    <input class="form-check-input fs-5 mb-5" type="radio" name="radio3" id="btn-hora-radio3" value="opcion-hora-3" aria-label="btn-hora-3">
                    <p class="h6">18:00</p>
                    <input class="form-check-input fs-5 mb-3" type="radio" name="radio3" id="btn-hora-radio4" value="opcion-hora-4" aria-label="btn-hora-4">

                </div>
            </div>      
        </div>

        <!-- Boton  -->

        <div class="container">
            <div class="row">
                <div class="col-6">
                <p>Retrocede a la pantalla elegir deporte <a href="/paginas_proyecto/elegir_deporte.php"> <-Atrás</a></p> 
                </div>
                <div class="col-6">
                    <button type="boton" class="btn btn-primary btn-lg">
                        <a href="/paginas_proyecto/paginas_confirmacion/pagina_confirmacion.html" style="color: white;">Continuar</a>
                    </button>
                </div>
            </div>
        </div>
    </form>
     <!-- Pie -->

    <div class="container">
      <footer class="py-3 my-4">
        <ul class="nav justify-content-center border-bottom pb-3 mb-3">
        </ul>
        <p class="text-center text-muted fs-5 fst-italic">Copyright © 2022 Aloha-Wind by Pedro Sánchez Palomino</p>
      </footer>
    </div>

    <!-- Enlaces -->
    <script src="/libls/bootstrap/jquery/jquery-3.6.1.min.js"></script>
    <script src="/libls/bootstrap/js/bootstrap.min.js"></script>
    <script src="/libls/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/datepicker/js/bootstrap-datepicker.min.js"></script>
    <script src="/datepicker/js/app.js"></script>

</body>
</html>