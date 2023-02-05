<?php
include_once '/wamp64/www/aloha_wind/registrar/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();



$nombre = (isset($_POST['nombre'])) ? $_POST['nombre'] : '';
$apellido = (isset($_POST['apellido'])) ? $_POST['apellido'] : '';
$nacionalidad = (isset($_POST['nacionalidad'])) ? $_POST['nacionalidad'] : '';
$telefono = (isset($_POST['telefono'])) ? $_POST['telefono'] : '';
$usuario = (isset($_POST['usuario'])) ? $_POST['usuario'] : '';
$password = (isset($_POST['password'])) ? $_POST['password'] : '';
$id = (isset($_POST['id'])) ? $_POST['id'] : '';



$consulta = "INSERT INTO usuario (nombre, apellido, nacionalidad, telefono, usuario, password) VALUES('$nombre', '$apellido', '$nacionalidad', '$telefono', '$usuario', '$password') ";			
$resultado = $conexion->prepare($consulta);
$resultado->execute();



if ($resultado){
    header ("Location: /login/iniciar_sesion.php");
}else{
    header("Location: /registrar/registrar.php");

}


$conexion = NULL;

?>