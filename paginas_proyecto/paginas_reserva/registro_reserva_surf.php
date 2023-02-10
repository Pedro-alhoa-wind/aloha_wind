<?PHP

include_once "/wamp64/www/aloha_wind/registrar/conexion.php";
$objeto = new Conexion ();
$conexion = $objeto->Conectar();

$monitor = (isset($_POST['monitor'])) ? $_POST['monitor'] : '';
$clase = (isset($_POST['clase'])) ? $_POST['clase'] : '';
$fecha = (isset($_POST['fecha'])) ? $_POST['fecha'] : '';
$hora = (isset($_POST['hora'])) ? $_POST['hora'] : '';
// $id = (isset($_POST['id'])) ? $_POST['id'] : '';



$consulta = "INSERT INTO reservas_clases_surf (monitor, clase, fecha, hora) VALUES ('$monitor', '$clase', '$fecha', '$hora') ";
$resultado = $conexion->prepare($consulta);
$resultado->execute();



$conexion = null;


?>

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
    <link rel="stylesheet" href="/paginas_proyecto/paginas_alquiler/alquiler_surf.css">


    <title>Alhoa-Wind</title>
</head>
<body style="background-color: ivory;">

    <!-- Body -->

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <img src="/assets/imagenes/logo_aloha_wind_favicon.png" class="d-grid gap-3 col-2 mx-auto" alt="" style="width: 15%;">
                <br>
                <p class="titulo text-md-center my-5 fs-4 fw-light">Gracias por confiar en nosotros.<br>
                Has reservado una clase de SURF con nuestro monitor <?php  echo $monitor; ?>, de tipo <?php echo $clase; ?>, y para el día <?php echo $fecha; ?> a las <?php echo $hora; ?> h. 
                </p>
                <br>
                <p class="titulo text-md-center my-5 fs-1 fw-bolder">¡Te esperamos!</p>
                <br>
                <img src="/assets/imagenes/saludo.png" class="d-grid gap-3 col-2 mx-auto" alt="" style="width: 20%;">
            </div>
        </div>
    </div>

<br>
<br>

    <!-- Boton  -->

    <div class="container">
        <div class="row">
            <div class="d-grid gap-3 col-2 mx-auto">
                <button type="boton" class="btn btn-primary btn-lg-center">
                    <a href="/paginas_proyecto/elegir_deporte.php" style="color: white;">Continuar</a>
                </button>
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

    <!-- Enlaces -->
    <script src="/libls/bootstrap/jquery/jquery-3.6.1.min.js"></script>
    <script src="/libls/bootstrap/js/bootstrap.min.js"></script>
    <script src="/libls/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/datepicker/js/bootstrap-datepicker.min.js"></script>
    <script src="/datepicker/js/app.js"></script>

</body>
</html>