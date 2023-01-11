<?php
include_once '/wamp64/www/aloha_wind/pagina_admin/crud/crud_usuario/bd/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$consulta = "SELECT id_usuario, nombre, apellido, nacionalidad, telefono, email, password FROM usuario";
$resultado = $conexion->prepare($consulta);
$resultado->execute();
$data=$resultado->fetchAll(PDO::FETCH_ASSOC);
?>





<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width-device-width, initial-scale-1">
        <link rel="shortcut icon" href="#">
        
        <title> CRUD </title>

        <link rel="stylesheet" href="/libls/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="/pagina_admin/crud/crud_usuario/main.css">

        <link rel="stylesheet" type="text/css" href="/pagina_admin/crud/datatables/datatables.min.css">
        <link rel="stylesheet" type="text/css" href="/pagina_admin/crud/datatables/DataTables-1.13.1/css/dataTables.bootstrap4.min.css">
    </head>

    <body>
        <header>
            <h4 class="text-center text-light"> CRUD <span class="badge badge-danger">DATATABLES</span></h4>
        </header>

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <button id="btnNuevo" type="button" class="btn btn-warning"> Nuevo</button>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">
                        <table id="tablaPersonas" class="table table-striped table-bordered table-condensed" style="width: 100%">
                            <thead class="text-center">
                                <tr>
                                    <th>Id</th>
                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                    <th>Nacionalidad</th>
                                    <th>Teléfono</th>
                                    <th>Usuario</th>
                                    <th>Password</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach($data as $dat){
                                ?>
                                <tr>
                                    <td><?php echo $dat['id']?></td>
                                    <td><?php echo $dat['nombre']?></td>
                                    <td><?php echo $dat['apellido']?></td>
                                    <td><?php echo $dat['nacionalidad']?></td>
                                    <td><?php echo $dat['telefono']?></td>
                                    <td><?php echo $dat['usuario']?></td>
                                    <td><?php echo $dat['password']?></td>
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

        <!-- modal -->

        <div class="modal fade" id="modalCRUD" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Nuevo Usuario</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="close"> <span aria-hidden="true">&times;</span></button>
                    </div>
                <form id="formPersonas">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="nombre" class="col-form-label">Nombre:</label>
                            <input type="text" class="form-control" id="nombre">
                        </div>
                        <div class="form-group">
                            <label for="apellido" class="col-form-label">Apellido:</label>
                            <input type="text" class="form-control" id="apellido">
                        </div>
                        <div class="form-group">
                            <label for="nacionalidad" class="col-form-label">Nacionalidad:</label>
                            <input type="text" class="form-control" id="nacionalidad">
                        </div>
                        <div class="form-group">
                            <label for="telefono" class="col-form-label">Teléfono:</label>
                            <input type="text" class="form-control" id="telefono">
                        </div>
                        <div class="form-group">
                            <label for="usuario" class="col-form-label">Usuario:</label>
                            <input type="text" class="form-control" id="usuario">
                        </div>
                        <div class="form-group">
                            <label for="password" class="col-form-label">Password:</label>
                            <input type="text" class="form-control" id="password">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" id="btnCancelar" class="btn btn-light" data-dismiss="modal">Cancelar</button>
                        <button type="submit" id="btnGuardar" class="btn btn-dark">Guardar</button>
                    </div>
                </form>   
                </div>
            </div>
        </div>





        <!-- Bootstrap.js, jQuery.js, Popper.js -->
        <script src="/libls/bootstrap/js/bootstrap.min.js"></script>
        <script src="/libls/bootstrap/jquery/jquery-3.6.1.min.js"></script>
        <script src="/libls/bootstrap/popper/popper.min.js"></script>

        <!-- datatables.js -->

        <script type="text/javascript" src="/pagina_admin/crud/datatables/datatables.min.js"></script>
        <script type="text/javascript" src="/pagina_admin/crud/crud_usuario/main.js"></script>

    </body>
</html>