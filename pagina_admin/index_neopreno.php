<?php require_once "/wamp64/www/aloha_wind/pagina_admin/vistas/vista_superior.php"?>

<!-- INICIO CRUD -->
<div class="container">


    <h1>NEOPRENOS</h1>


    <?php
include_once '/wamp64/www/aloha_wind/pagina_admin/bd/bd_neopreno/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$consulta = "SELECT id, marca, modelo, talla, grosor FROM neopreno";
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
                        <table id="tablaNeopreno" class="table table-striped table-bordered table-condensed" style="width:100%">
                        <thead class="text-center">
                            <tr>
                                <th>Id</th>
                                <th>Marca</th>
                                <th>Modelo</th>                                
                                <th>Talla</th>
                                <th>Grosor</th>  
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php                            
                            foreach($data as $dat) {                                                        
                            ?>
                            <tr>
                                <td><?php echo $dat['id']?></td>
                                <td><?php echo $dat['marca']?></td>
                                <td><?php echo $dat['modelo']?></td>
                                <td><?php echo $dat['talla']?></td>
                                <td><?php echo $dat['grosor']?></td>   
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
        <form id="formNeopreno">    
            <div class="modal-body">
                <div class="form-group">
                <label for="marca" class="col-form-label">Marca:</label>
                <input type="text" class="form-control" id="marca">
                </div>
                <div class="form-group">
                <label for="modelo" class="col-form-label">Modelo:</label>
                <input type="text" class="form-control" id="modelo">
                </div>                
                <div class="form-group">
                <label for="talla" class="col-form-label">Talla:</label>
                <input type="text" class="form-control" id="talla">
                </div>
                <div class="form-group">
                <label for="grosor" class="col-form-label">Grosor:</label>
                <input type="text" class="form-control" id="grosor">
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