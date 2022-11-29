<?php
include_once('db.php');
//Recibimos los datos del formulario
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$fecha_nacimiento=$_POST['fecha_nacimiento'];
$nacionalidad=$_POST['nacionalidad'];
$telefono=$_POST['telefono'];
$usuario=$_POST['usuario'];
$password=$_POST['password'];


    $conexion=crearConexion();
    $sql="INSER INTO usuario (nombre, apellido, fecha_nacimiento, nacionalidad, telefono, usuario, password) 
    VALUE ('$nombre', '$apellido', '$fecha_nacimiento', '$nacionalidad', '$telefono', '$usuario', '$password')";
    $resul = mysqli_query($conexion, $sql);

?>