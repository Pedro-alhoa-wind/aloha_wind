<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="#"/>

    <!-- Bootstrap CSS -->
    <link href="/libls/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   

    <!--Esta es mi carpeta de estilo-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Poppins&family=Quicksand:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/login/iniciar_sesion.css">
    
    <link rel="stylesheet" href="/libls/sweetalert2/sweetalert2.min.css">


    <title>Aloha-Wind</title>
</head>
<body style="background-color: #e3f2fd;">

    <!-- Cabecera -->
    <div class="container-fluid">
        <div class="row mb-5">
            <div class="col-md-offset-2">
                <div class="d-flex justify-content-between align-items-center mb-2">
                    <div class="">
                        <a href="/index.php">
                        <img src="/assets/imagenes/logo_aloha_wind.png" alt="logo" style="height: 7rem;">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- cuerpo -->
    <div class="container"><br><br>
        <div class="row justify-content-center">
                <div class="col-6">
                    <p class="text-center fs-2 fst-italic fw-bolder" id="iniciarSesion">Bienvenido</p>
                    <form action="/login/validar.php" id="formLogin" method="post" action="">
                    
                            <div class="form-floating mb-4">
                                <input type="text" name="usuario" class="form-control" id="usuario" placeholder="usuario">
                                <label for="floatingInput">Usuario</label>
                            </div>

                            <div class="form-floating mb-5">
                                <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                                <label for="floatingPassword">Password</label>
                            </div>

                            <div class="text-center">

                                <button type="submit" name="submit" class="btn btn-primary btn-lg mb-3">Entrar</button>

                            </div><br>

                            <p class="text-center fs-5" id="pulsa_aqui" >Si aún no tiene una cuenta <a class="link" href="/registrar/registrar.php">Pulse aquí</a></p>


                    </form>
                </div>
        </div>
    </div>



    <script src="/libls/bootstrap/jquery/jquery-3.3.1.min.js"></script>
    <script src="/libls/bootstrap/js/bootstrap.min.js"></script>
    <script src="/libls/jquery/jquery-3.6.3.min.js"></script>
    <script src="/libls/popper/popper.min.js"></script>
    <script src="/libls/sweetalert2/sweetalert2.all.min.js"></script>
    <script src="/login/iniciar_sesion.js"></script>
</body>
</html>