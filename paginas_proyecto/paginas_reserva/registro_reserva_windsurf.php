<?PHP

include_once "/wamp64/www/aloha_wind/registrar/conexion.php";
$objeto = new Conexion ();
$conexion = $objeto->Conectar();

$monitor = (isset($_POST['monitor'])) ? $_POST['monitor'] : '';
$clase = (isset($_POST['clase'])) ? $_POST['clase'] : '';
$fecha = (isset($_POST['fecha'])) ? $_POST['fecha'] : '';
$hora = (isset($_POST['hora'])) ? $_POST['hora'] : '';
// $id = (isset($_POST['id'])) ? $_POST['id'] : '';



$consulta = "INSERT INTO reservas_clases_windsurf (monitor, clase, fecha, hora) VALUES ('$monitor', '$clase', '$fecha', '$hora') ";
$resultado = $conexion->prepare($consulta);
$resultado->execute();



$conexion = null;






?>