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
    <link rel="stylesheet" href="/registrar/registrar.css">
    

    <title>Alhoa-Wind</title>
</head>

<body style="background-color: #e3f2fd;">

    <!-- Cabecera -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-offset-2">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="my-2">
                        <a href="/index.php">
                            <img src="/assets/imagenes/logo_aloha_wind.png" alt="logo" style="height: 6rem;">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Cuerpo -->

    <div class="container">
        <div class="row my-3">
            <div class="">
                <p class="fs-2 text-center" id="registrate">REGISTRATE</p>
                <form name="form" action="/registrar/registro.php" method="POST">
                    <div class="row">
                        <div class="my-3 mx-5 input-group">  
                            <div class="col-md-4">
                                <label for="nombreUsuario" class="form-label">Nombre</label>
                                <input id="nombreUsuario" class="form-control" name="nombre" type="text" placeholder="Escribe tu nombre...." required>
                            </div>
                            <div class="col-1"></div>
                            <div class="col-md-5">
                                <label for="apellidosUsuario" class="form-label">Apellidos</label>
                                <input id="apellidosUsuario" class="form-control" name="apellido" type="text" placeholder="Escribe tus apellidos...." required>
                            </div>
                        </div>
                    </div>

                
                    <div class="row">
                        <div class="my-3 mx-5 input-group">  
                        
                            <div class="col-md-4">
                                <label for="nacionalidadUsuario" class="form-label">Nacionalidad</label>
                                <input id="nacionalidadUsuario" class="form-control" name="nacionalidad" type="text" placeholder="Escribe tu nacionalidad...." required>
                            </div>
                            <div class="col-1"></div> 
                            <div class="col-md-5">
                                <label for="telefonoUsuario" class="form-label">Teléfono</label>
                                <input id="telefonoUsuario" class="form-control" name="telefono" type="text" placeholder="Escribe tu teléfono...." required>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="my-3 mx-5 input-group">  
                            <div class="col-md-4">
                                <label for="usuario" class="form-label">Nombre usuario</label>
                                <input id="usuario" class="form-control" name="usuario" type="text" placeholder="Escribe tu nombre Usuario...." required>
                            </div>
                            <div class="col-1"></div>
                            <div class="col-mb-5">
                                <label for="password" class="form-label">Password</label>
                                <input id="password" class="form-control" name="password" type="password" placeholder="Escribe tu password..." required>
                            </div>
                            
                        </div>
                    </div>

                    <div class="row">
                        <div class="my-3 mx-5">
                            <div class="col-md-12">
                            <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="" id="terms" required>
                                    <label for="terms" class="form-check-label">Acepto los términos y condiciones</label>
                            </div> 
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="my-3 mx-5">
                            <div class="col-md-5">
                                <a href="/login/iniciar_sesion.php">
                                <button type="submit" name="" class="btn btn-primary btn-lg"> Enviar </button>
                                </a>
                            </div>
                        </div>
                        

                    </div>

                </form>


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


    <script src="/libls/bootstrap/js/bootstrap.min.js"></script>    
</body>
</html>
