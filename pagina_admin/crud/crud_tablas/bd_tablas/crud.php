<?php
include_once '/wamp64/www/aloha_wind/pagina_admin/crud/crud_tablas/bd_tablas/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

// Recepción de los datos enviados mediante POST desde el JS   

$deporte = (isset($_POST['deporte'])) ? $_POST['deporte'] : '';
$marca = (isset($_POST['marca'])) ? $_POST['marca'] : '';
$tipo = (isset($_POST['tipo'])) ? $_POST['tipo'] : '';
$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';
$id = (isset($_POST['id'])) ? $_POST['id'] : '';

switch($opcion){
    case 1: //alta
        $consulta = "INSERT INTO tablas (deporte, marca, tipo) VALUES('$deporte', '$marca', '$tipo') ";			
        $resultado = $conexion->prepare($consulta);
        $resultado->execute(); 

        $consulta = "SELECT id, deporte, marca, tipo FROM tablas ORDER BY id DESC LIMIT 1";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
    case 2: //modificación
        $consulta = "UPDATE tablas SET deporte='$deporte', marca='$marca', tipo='$tipo', WHERE id='$id' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();        
        
        $consulta = "SELECT id, deporte, marca, tipo FROM tablas WHERE id='$id' ";       
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;        
    case 3://baja
        $consulta = "DELETE FROM tablas WHERE id='$id' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();                           
        break;        
}

print json_encode($data, JSON_UNESCAPED_UNICODE); //enviar el array final en formato json a JS
$conexion = NULL;
