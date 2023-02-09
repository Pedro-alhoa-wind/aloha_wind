<?php
include_once '/wamp64/www/aloha_wind/registrar/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

// Recepción de los datos enviados mediante POST desde el JS   

$tablas = (isset($_POST['tablas'])) ? $_POST['tablas'] : '';
$velas = (isset($_POST['velas'])) ? $_POST['velas'] : '';
$neoprenos = (isset($_POST['neoprenos'])) ? $_POST['neoprenos'] : '';
$fecha = (isset($_POST['fecha'])) ? $_POST['fecha'] : '';
$hora = (isset($_POST['hora'])) ? $_POST['hora'] : '';
$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';
$id = (isset($_POST['id'])) ? $_POST['id'] : '';


switch($opcion){
    case 1: //alta
        $consulta = "INSERT INTO reservas_alquiler_windsurf (tablas, velas, neoprenos, fecha, hora) VALUES('$tablas', '$velas', '$neoprenos', '$fecha', '$hora') ";			
        $resultado = $conexion->prepare($consulta);
        $resultado->execute(); 

        $consulta = "SELECT id, tablas, velas, neoprenos, fecha, hora FROM reservas_alquiler_windsurf ORDER BY id DESC LIMIT 1";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
    case 2: //modificación
        $consulta = "UPDATE reservas_alquiler_windsurf SET tablas='$tablas', velas='$velas', neoprenos='$neoprenos', fecha='$fecha', hora='$hora' WHERE id='$id' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();        
        
        $consulta = "SELECT id, tablas, velas, neoprenos, fecha, hora FROM reservas_alquiler_windsurf WHERE id='$id' ";       
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;        
    case 3://baja
        $consulta = "DELETE FROM reservas_alquiler_windsurf WHERE id='$id' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();                           
        break;        
}

print json_encode($data, JSON_UNESCAPED_UNICODE); //enviar el array final en formato json a JS
$conexion = NULL;
