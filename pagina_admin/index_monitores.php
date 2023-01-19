<?php require_once "/wamp64/www/aloha_wind/pagina_admin/vistas/vista_superior.php"?>

<!-- INICIO CRUD -->
<div class="container">


    <h1>MONITORES</h1>

    <?php
include_once '/wamp64/www/aloha_wind/pagina_admin/bd/bd_monitores/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$consulta = "SELECT id, deporte, dni, nombre, apellido, telefono, email FROM monitores";
$resultado = $conexion->prepare($consulta);
$resultado->execute();
$data=$resultado->fetchAll(PDO::FETCH_ASSOC);
?>
       
      
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
    
</div> 



   
      
                         

<!-- FIN CRUD -->
<?php require_once "/wamp64/www/aloha_wind/pagina_admin/vistas/vista_inferior.php"?>