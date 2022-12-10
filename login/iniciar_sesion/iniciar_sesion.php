<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="/libls/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/libls/bootstrap/jquery/jquery-3.6.1.min.js">

    <!--Esta es mi carpeta de estilo-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Poppins&family=Quicksand:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/login/iniciar_sesion/iniciar_sesion.css">
    

    <title>Alhoa-Wind</title>
</head>
<body style="background-color: #e3f2fd;">

    <!-- Cabecera -->
    <div class="container-fluid">
        <div class="row mb-5">
            <div class="col-md-offset-2">
                <div class="d-flex justify-content-between align-items-center mb-2">
                    <div class="">
                        <img src="/assets/imagenes/logo_aloha_wind.png" alt="logo" style="height: 7rem;">
                        <a href="/index.html"></a>
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
                    <form action="/login/validar.php" method="post">
                    
                            <div class="form-floating mb-4">
                                <input type="text" name="usuario" class="form-control" id="floatingInput" placeholder="usuario" required>
                                <label for="floatingInput">Usuario</label>
                            </div>

                            <div class="form-floating mb-5">
                                <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password" required>
                                <label for="floatingPassword">Password</label>
                            </div>

                            <div class="text-center">

                                <button type="submit" class="btn btn-primary btn-lg mb-3">Entrar</button>

                            </div><br>

                            <p class="text-center fs-5" id="pulsa_aqui" >Si aun no tiene una cuenta <a class="link" href="/login/registrar/registrar.php">Pulsa aquí</a></p>


                    </form>
                </div>
        </div>
    </div>
    <script src="/libls/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>