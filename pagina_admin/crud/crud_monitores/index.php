<?php
include_once '/wamp64/www/aloha_wind/pagina_admin/crud/crud_usuario/bd/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$consulta = "SELECT id, deporte, dni, nombre, apellido, telefono, email FROM monitor";
$resultado = $conexion->prepare($consulta);
$resultado->execute();
$data=$resultado->fetchAll(PDO::FETCH_ASSOC);
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- META -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="#" />  
    <title>Alhoa-wind</title>
      
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- CSS personalizado --> 
    <link rel="stylesheet" href="main.css">  
      
      
    <!--datables CSS básico-->
    <link rel="stylesheet" type="text/css" href="datatables/datatables.min.css"/>
    <!--datables estilo bootstrap 4 CSS-->  
    <link rel="stylesheet"  type="text/css" href="datatables/DataTables-1.13.1/css/dataTables.bootstrap4.min.css">
    <!-- FUENTE -->
    <script src="https://kit.fontawesome.com/d3532511de.js" crossorigin="anonymous"></script>
    
  </head>
    
  <body> 
     <header>
         <h4 class="text-center text-light">CRUD con <span class="badge badge-danger">DATATABLES</span></h4> 
     </header>    
      
    <div class="container">
        <div class="row">
            <div class="col-lg-12">            
            <button id="btnNuevo" type="button" class="btn btn-success" data-toggle="modal">Nuevo</button>    
            </div>    
        </div>    
    </div>    
    <br>  
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">        
                        <table id="tablaMonitor" class="table table-striped table-bordered table-condensed" style="width:100%">
                        <thead class="text-center">
                            <tr>
                                <th>Id</th>
                                <th>Deporte</th>
                                <th>DNI</th>                                
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Telefono</th> 
                                <th>Email</th>  
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php                            
                            foreach($data as $dat) {                                                        
                            ?>
                            <tr>
                                <td><?php echo $dat['id']?></td>
                                <td><?php echo $dat['deporte']?></td>
                                <td><?php echo $dat['dni']?></td>
                                <td><?php echo $dat['nombre']?></td>
                                <td><?php echo $dat['apellido']?></td>
                                <td><?php echo $dat['telefono']?></td>
                                <td><?php echo $dat['email']?></td>    
                                <td></td>
                            </tr>
                            <?php
                                }
                            ?>                                
                        </tbody>        
                       </table>                    
                    </div>
                </div>
            </div>  
        </div>    
      
<!--Modal para CRUD-->
<div class="modal fade" id="modalCRUD" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
        <form id="formMonitor">    
            <div class="modal-body">
                <div class="form-group">
                <label for="deporte" class="col-form-label">Deporte:</label>
                <input type="text" class="form-control" id="deporte">
                </div>
                <div class="form-group">
                <label for="dni" class="col-form-label">DNI:</label>
                <input type="text" class="form-control" id="dni">
                </div>                
                <div class="form-group">
                <label for="nombre" class="col-form-label">Nombre:</label>
                <input type="text" class="form-control" id="nombre">
                </div>
                <div class="form-group">
                <label for="apellido" class="col-form-label">Apellido:</label>
                <input type="text" class="form-control" id="apellido">
                </div>
                <div class="form-group">
                <label for="telefono" class="col-form-label">Teléfono:</label>
                <input type="numer" class="form-control" id="telefono">
                </div>
                <div class="form-group">
                <label for="email" class="col-form-label">Email:</label>
                <input type="text" class="form-control" id="email">
                </div>            
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
                <button type="submit" id="btnGuardar" class="btn btn-dark">Guardar</button>
            </div>
        </form>    
        </div>
    </div>
</div>  
      
    <!-- jQuery, Popper.js, Bootstrap JS -->
    <!-- <script src="jquery/jquery-3.3.1.min.js"></script> -->
    <script src="/pagina_admin/crud/crud_monitores/jquery/jquery-3.3.1.min.js"></script>
    <!-- <script src="popper/popper.min.js"></script> -->
    <script src="/pagina_admin/crud/crud_monitores/popper/popper.min.js"></script>
    <!-- <script src="bootstrap/js/bootstrap.min.js"></script> -->
    <script src="/pagina_admin/crud/crud_monitores/bootstrap/js/bootstrap.min.js"></script>
      
    <!-- datatables JS -->
    <script type="text/javascript" src="datatables/datatables.min.js"></script> 
    
    <!-- BOTONES DATATABLES -->
    <script src="datatables/Buttons-2.3.3/js/dataTables.buttons.min.js"></script>
    <script src="datatables/JSZip-2.5.0/jszip.min.js"></script>
    <script src="datatables/pdfmake-0.1.36/pdfmake.min.js"></script>
    <script src="datatables/pdfmake-0.1.36/vfs_fonts.js"></script>
    <script src="datatables/Buttons-2.3.3/js/buttons.html5.min.js"></script>


    <!-- NUESTRO JS  -->
    <script type="text/javascript" src="main.js"></script>  
    
    
  </body>
</html>
