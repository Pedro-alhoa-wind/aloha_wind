<?php

<<<<<<< HEAD
session_start();

include_once '/wamp64/www/aloha_wind/login/bd/conexion.php';
$objeto = new Conexion();
$conexion = $objeto -> Conectar();


$usuario = (isset($_POST['usuario'])) ? $_POST['usuario'] : '';
$password = (isset($_POST['password'])) ? $_POST['password'] : '';

$pass = md5($password);

$consulta = "SELECT usuario, password FROM usuario WHERE usuario='$usuario' AND password='$pass' ";
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
=======
    $usuario=$_POST['usuario'];
    $password=$_POST['password'];
    session_start();
    $_SESSION['usuario']=$usuario;

    include('db.php');

    $consulta="SELECT*FROM usuario where usuario='$usuario' and password='$password'";
    
    $resultado=mysqli_query($conexion,$consulta);

    $filas=mysqli_num_rows($resultado);

    if($filas){
        header("location:/paginas_proyecto/elegir_deporte.html");
    }else{
        ?>
        <?php 
        header("location:/login/iniciar_sesion/iniciar_sesion.php");
        ?>
        <h1>Error en la autentificación</h1>
        <?php
    }
    mysqli_free_result($resultado);
    mysqli_close($conexion);


>>>>>>> 68c101d36949fb2962aeecf5492186182e9a0095


