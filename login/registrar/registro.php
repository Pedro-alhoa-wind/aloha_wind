<?php
 function crearConexion(){
    $hostname = "localhost";
    $usuariodb = "root";
    $passworddb = "";
    $dbname = "bd_alhoawind";

    //Generando la conexion con el servidor

    $conexion = mysqli_connect($hostname, $usuariodb, $passworddb, $dbname);

    // Si hay un error en la conexión, lo mostramos y detenemos

    if (!$conexion){
        die( "<br> Error de conexión con la base de datos: " . mysqli_connect_error());
    }
    else{
        echo "Conexión exitosa";
   }
    return $conexion;

}

//crearConexion();




// include_once('db.php');
//echo "los datos son los siguientes: <br>";
// echo "$nombre,$apellido,$fecha_nacimiento,$nacionalidad,$telefono,$usuario,$password";

// //Recibimos los datos del formulario
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$fecha_nacimiento=$_POST['fecha_nacimiento'];
$nacionalidad=$_POST['nacionalidad'];
$telefono=$_POST['telefono'];
$usuario=$_POST['usuario'];
$password=$_POST['password'];

// // echo "los datos son los siguientes: <br>";
// // echo "$nombre,$apellido,$fecha_nacimiento,$nacionalidad,$telefono,$usuario,$password";
echo $nombre;

// $conexion=crearConexion();
$sql="INSER INTO usuario (nombre, apellido, fecha_nacimiento, nacionalidad, telefono, usuario, password)
VALUE ('$nombre', '$apellido', '$fecha_nacimiento', '$nacionalidad', '$telefono', '$usuario', '$password')";
mysqli_query(crearConexion(), $sql);

?>