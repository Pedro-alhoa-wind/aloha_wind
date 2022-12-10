<?php

include('db_registrar.php');
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



// $conexion=crearConexion();
$consulta="INSERT INTO `usuario`(`nombre`, `apellido`, `fecha_nacimiento`, `nacionalidad`, `telefono`, `usuario`, `password`) VALUES ('$nombre','$apellido','$fecha_nacimiento','$nacionalidad','$telefono','$usuario','$password')";
 
 $resultado=mysqli_query($conexion, $consulta);

?>