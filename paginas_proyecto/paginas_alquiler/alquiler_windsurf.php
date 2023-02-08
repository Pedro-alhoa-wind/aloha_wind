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
    <link rel="stylesheet" href="/paginas_proyecto/paginas_alquiler/alquiler_windsurf.css">


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
    <form action="/paginas_proyecto/paginas_alquiler/registro_alquiler_windsurf.php" method="post">
        <!-- Body -->

        <div class="container">
            <p class="titulo text-md-center my-5 fs-1 fw-bolder">Selecciona tu alquiler material de Windsurf</p>
        </div>

        <!-- Elegir la tabla -->

        <div class="container-md">
            <div class="">
                <p class="h6"><strong>Elija la tabla:</strong></p><br><br>
                <div class="row">
                    <div class="col-md-6">
                        <select class="form-select" aria-label="select-alquiler-tabla-windsurf" name="tablas" id="">
                            <option selected>Elija su tabla</option>
                            <option value="78L">78L.</option>
                            <option value="87L">87L.</option>
                            <option value="93L">93L.</option>
                            <option value="103L">103L.</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <img src="/assets/imagenes/tabla_windsurf.jpeg" width="600px" alt="medida-tablas">
                    </div>
                </div>  
            </div>

            <ul class="nav justify-content-center border-bottom pb-5 mb-3"></ul>

            <!-- Elegir tipo vela -->

            <div class="">
                <p class="h6"><strong>Elija la de vela:</strong></p><br><br>
                <div class="row">
                    <div class="col-md-6">
                        <select class="form-select" aria-label="select-alquiler-vela-windsurf" name="velas" id="">
                            <option selected>Elija su vela</option>
                            <option value="Vela Olas">Vela Olas</option>
                            <option value="Vela Race">Vela Race</option>
                            <option value="Vela Freeride">Vela Freeride</option>
                            <option value="Vela Freestyle">Vela Freestyle</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <img src="/assets/imagenes/tipo_velas_windsurf.jpg" width="600px" alt="medida-tablas">
                    </div>
                </div>  
            </div>

            <ul class="nav justify-content-center border-bottom pb-5 mb-3"></ul>
            <!-- Elegir el traje neopreno -->

                <p class="h6"><strong>Elija el tipo de neopreno:</strong></p><br><br>
                <div class="row">
                    <div class="col-md-6">
                        <select class="form-select" aria-label="select-alquiler-neopreno" name="neoprenos" id="">
                            <option selected>Elija su talla de neopreno</option>
                            <option value="XS">XS</option>
                            <option value="S">S</option>
                            <option value="M">M</option>
                            <option value="L">L</option>
                            <option value="XL">XL</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <img src="/assets/imagenes/Talla_medida_neopreno.jpg" width="600px" alt="">

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
                    <input type="text" name="fecha">
                </div>
                
                <div class="col-3">
                        <p class="mb-4">Mañana</p>
                        <p class="h6">10:00</p>
                        <input class="form-check-input fs-5 mb-5" type="radio" name="hora" id="btn-hora-radio1" value="10:00" aria-label="btn-hora-1">
                        <p class="h6">11:00</p>
                        <input class="form-check-input fs-5 mb-5" type="radio" name="hora" id="btn-hora-radio2" value="11:00" aria-label="btn-hora-2">
                        <p class="h6">12:00</p>
                        <input class="form-check-input fs-5 mb-3" type="radio" name="hora" id="btn-hora-radio3" value="12:00" aria-label="btn-hora-3">
                </div>
                <div class="col-3">
                    <p class="mb-4">Tarde</p>
                    <p class="h6">16:00</p>
                    <input class="form-check-input fs-5 mb-5" type="radio" name="hora" id="btn-hora-radio4" value="16:00" aria-label="btn-hora-4">
                    <p class="h6">17:00</p>
                    <input class="form-check-input fs-5 mb-5" type="radio" name="hora" id="btn-hora-radio5" value="17:00" aria-label="btn-hora-5">
                    <p class="h6">18:00</p>
                    <input class="form-check-input fs-5 mb-3" type="radio" name="hora" id="btn-hora-radio6" value="18:00" aria-label="btn-hora-6">

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
                    <a href="/paginas_proyecto/paginas_confirmacion/pagina_confirmacion.html" style="color: white;">
                        <button type="submit" class="btn btn-primary btn-lg">Continuar</button>
                    </a>
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
    <script src="/paginas_proyecto/paginas_alquiler/main.js"></script>

</body>
</html>