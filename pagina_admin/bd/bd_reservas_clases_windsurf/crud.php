<?php
include_once '/wamp64/www/aloha_wind/registrar/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

// Recepción de los datos enviados mediante POST desde el JS   

$monitor = (isset($_POST['monitor'])) ? $_POST['monitor'] : '';
$clase = (isset($_POST['clase'])) ? $_POST['clase'] : '';
$fecha = (isset($_POST['fecha'])) ? $_POST['fecha'] : '';
$hora = (isset($_POST['hora'])) ? $_POST['hora'] : '';
$id = (isset($_POST['id'])) ? $_POST['id'] : '';

switch($opcion){
    case 1: //alta
        $consulta = "INSERT INTO reservas_clases_windsurf (monitor, clase, fecha, hora) VALUES('$monitor', '$clase', '$fecha', '$hora') ";			
        $resultado = $conexion->prepare($consulta);
        $resultado->execute(); 

        $consulta = "SELECT id, monitor, clase, fecha, hora FROM reservas_clases_windsurf ORDER BY id DESC LIMIT 1";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
    case 2: //modificación
        $consulta = "UPDATE reservas_clases_windsurf SET monitor='$monitor', clase='$clase', fecha='$fecha', hora='$hora' WHERE id='$id' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();        
        
        $consulta = "SELECT id, monitor, clase, fecha, hora FROM reservas_clases_windsurf WHERE id='$id' ";       
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;        
    case 3://baja
        $consulta = "DELETE FROM reservas_clases_windsurf WHERE id='$id' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();                           
        break;        
}

print json_encode($data, JSON_UNESCAPED_UNICODE); //enviar el array final en formato json a JS
$conexion = NULL;