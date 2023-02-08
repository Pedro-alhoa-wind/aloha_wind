<?PHP

include_once "/wamp64/www/aloha_wind/registrar/conexion.php";
$objeto = new Conexion ();
$conexion = $objeto->Conectar();

$tablas = (isset($_POST['tablas'])) ? $_POST['tablas'] : '';
$velas = (isset($_POST['velas'])) ? $_POST['velas'] : '';
$neoprenos = (isset($_POST['neoprenos'])) ? $_POST['neoprenos'] : '';
$fecha = (isset($_POST['fecha'])) ? $_POST['fecha'] : '';
$hora = (isset($_POST['hora'])) ? $_POST['hora'] : '';
// $id = (isset($_POST['id'])) ? $_POST['id'] : '';



$consulta = "INSERT INTO reservas_alquiler_windsurf (tablas, velas, neoprenos, fecha, hora) VALUES ('$tablas', '$velas', '$neoprenos', '$fecha', '$hora') ";
$resultado = $conexion->prepare($consulta);
$resultado->execute();



$conexion = null;






?>