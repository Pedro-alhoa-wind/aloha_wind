<?php
session_start();

if($_SESSION["s_usuario"] === null){
    header("Location: /pagina_admin/index.php");
}else{
    if($_SESSION["s_idRol"]!=1){
        header("Location: /paginas_proyecto/elegir_deporte.php");
    }
}

?>

<?php require_once "/wamp64/www/aloha_wind/pagina_admin/vistas/vista_superior.php"?>

<!-- INICIO CRUD -->
<div class="container">


    <h1>ALOHA-WIND</h1>


</div>

<!-- FIN CRUD -->
<?php require_once "/wamp64/www/aloha_wind/pagina_admin/vistas/vista_inferior.php"?>