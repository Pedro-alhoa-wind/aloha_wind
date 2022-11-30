<?php

//  Configuración necesaria para acceder a la base de datos
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

 function cerrarConexion($conexion){
     mysqli_close($conexion);
 }

?>