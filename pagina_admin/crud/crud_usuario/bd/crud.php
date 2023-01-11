<?php
include_once '/wamp64/www/aloha_wind/pagina_admin/crud/crud_usuario/bd/conexion.php';
$objeto= new Conexion();
$conexion = $objeto->Conectar();

$nombre = (isset($_POST['nombre'])) ? $_POST['nombre'] : '';
$apellido = (isset($_POST['apellido'])) ? $_POST['apellido'] : '';
$nacionalidad = (isset($_POST['nacionalidad'])) ? $_POST['nacionalidad'] : '';
$telefono = (isset($_POST['telefono'])) ? $_POST['telefono'] : '';
$usuario = (isset($_POST['usuario'])) ? $_POST['usuario'] : '';
$password = (isset($_POST['password'])) ? $_POST['password'] : '';

$consulta = "INSERT INTO usuario (nombre, apellido, nacionalidad, telefono, usuario, password) VALUES ('$nombre', '$apellido', '$nacionalidad', '$telefono', '$usuario', '$password')";
$resultado = $conexion->prepare($consulta);
$resultado->execute();

$consulta = "SELECT id_usuario, nombre, apellido, nacionalidad, telefono, usuario, password FROM usuario ORDER BY id_usuario DESC LIMIT 1";
$resultado = $conexion->prepare($consulta);
$resultado->execute();

$data=$resultado->fetchAll(PDO::FETCH_ASSOC);



print json_encode($data, JSON_UNESCAPED_UNICODE);
$conexion = null;