<?php

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




