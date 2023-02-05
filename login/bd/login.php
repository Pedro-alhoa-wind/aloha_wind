<?php

session_start();

include_once '/wamp64/www/aloha_wind/login/bd/conexion.php';
$objeto = new Conexion();
$conexion = $objeto -> Conectar();


$usuario = (isset($_POST['usuario'])) ? $_POST['usuario'] : '';
$password = (isset($_POST['password'])) ? $_POST['password'] : '';



$consulta = "SELECT usuario, password FROM usuario WHERE usuario='$usuario' AND password='$password' ";
$resultado = $conexion->prepare($consulta);
$resultado->execute();


if($resultado->rowCount() >= 1){

    $data = $resultado->fetchAll(PDO::FETCH_ASSOC);
    $_SESSION["s_usuario"] = $usuario;

}else{

    $_SESSION["s_usuario"] = null;
    $data=null;
}

print json_encode($data);
$conexion=null;


