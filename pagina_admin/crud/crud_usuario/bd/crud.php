<?php
include_once '/wamp64/www/aloha_wind/pagina_admin/crud/crud_usuario/bd/conexion.php';
$objeto= new Conexion();
$conexion = $objeto->Conectar();


$id = (isset($_POST['id'])) ? $_POST['id'] : '';
$nombre = (isset($_POST['nombre'])) ? $_POST['nombre'] : '';
$apellido = (isset($_POST['apellido'])) ? $_POST['apellido'] : '';
$nacionalidad = (isset($_POST['nacionalidad'])) ? $_POST['nacionalidad'] : '';
$telefono = (isset($_POST['telefono'])) ? $_POST['telefono'] : '';
$usuario = (isset($_POST['usuario'])) ? $_POST['usuario'] : '';
$password = (isset($_POST['password'])) ? $_POST['password'] : '';

        // $consulta = "INSERT INTO usuario (nombre, apellido, nacionalidad, telefono, usuario, password) VALUES ('$nombre', '$apellido', '$nacionalidad', '$telefono', '$usuario', '$password')";
        // $resultado = $conexion->prepare($consulta);
        // $resultado->execute();

        // $consulta = "SELECT id, nombre, apellido, nacionalidad, telefono, usuario, password FROM usuario ORDER BY id DESC LIMIT 1";
        // $resultado = $conexion->prepare($consulta);
        // $resultado->execute();
        // $data=$resultado->fetchAll(PDO::FETCH_ASSOC);


switch($opcion){

    case 1:

        $consulta = "INSERT INTO 'usuario' ('nombre', 'apellido', 'nacionalidad', 'telefono', 'usuario', 'password') VALUES ('$nombre', '$apellido', '$nacionalidad', '$telefono', '$usuario', '$password')";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();

        $consulta = "SELECT 'id', 'nombre', 'apellido', 'nacionalidad', 'telefono', 'usuario', 'password' FROM 'usuario' ORDER BY 'id' DESC LIMIT 1";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;

    case 2:
        $consulta="UPDATE usuario SET nombre='$nombre', apellido='$apellido', nacionalidad='$nacionalidad', telefono='$telefono', usuario='$usuario, password='$password' WHERE id='$id' ";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();

        $consulta = "SELECT id, nombre, apellido, nacionalidad, telefono, usuario, password FROM usuario WHERE id='$id' ";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data = $resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
        
    case 3:
        $consulta = "DELETE FROM usuario WHERE id='$id'";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        break;

}

print json_encode($data, JSON_UNESCAPED_UNICODE);
$conexion = NULL;