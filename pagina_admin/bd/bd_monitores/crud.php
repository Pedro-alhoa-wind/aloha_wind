<?php
include_once '/wamp64/www/aloha_wind/pagina_admin/bd/bd_monitores/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

// Recepción de los datos enviados mediante POST desde el JS   

$deporte = (isset($_POST['deporte'])) ? $_POST['deporte'] : '';
$dni = (isset($_POST['dni'])) ? $_POST['dni'] : '';
$nombre = (isset($_POST['nombre'])) ? $_POST['nombre'] : '';
$apellido = (isset($_POST['apellido'])) ? $_POST['apellido'] : '';
$telefono = (isset($_POST['telefono'])) ? $_POST['telefono'] : '';
$email = (isset($_POST['email'])) ? $_POST['email'] : '';
$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';
$id = (isset($_POST['id'])) ? $_POST['id'] : '';

switch($opcion){
    case 1: //alta
        $consulta = "INSERT INTO monitores (deporte, dni, nombre, apellido, telefono, email) VALUES('$deporte', '$dni', '$nombre', '$apellido', '$telefono', '$email') ";			
        $resultado = $conexion->prepare($consulta);
        $resultado->execute(); 

        $consulta = "SELECT id, deporte, dni, nombre, apellido, telefono, email FROM monitores ORDER BY id DESC LIMIT 1";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
    case 2: //modificación
        $consulta = "UPDATE monitores SET deporte='$deporte', dni='$dni, nombre='$nombre', apellido='$apellido', telefono='$telefono', email='$email' WHERE id='$id' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();        
        
        $consulta = "SELECT id, deporte, dni, nombre, apellido, telefono, email FROM monitores WHERE id='$id' ";       
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;        
    case 3://baja
        $consulta = "DELETE FROM monitores WHERE id='$id' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();                           
        break;        
}

print json_encode($data, JSON_UNESCAPED_UNICODE); //enviar el array final en formato json a JS
$conexion = NULL;
