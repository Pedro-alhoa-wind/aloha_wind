<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Aloha-Wind</title>


    <link href="/pagina_admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <link href="/pagina_admin/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- CSS datables  -->

    <link rel="stylesheet" type="text/css" href="/pagina_admin/vendor/datatables/datatables.min.css"/>
    <!--datables bootstrap 4 CSS-->
    <link rel="stylesheet"  type="text/css" href="/pagina_admin/vendor/datatables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">
    <!-- FUENTE -->
    <script src="https://kit.fontawesome.com/d3532511de.js" crossorigin="anonymous"></script>

</head>

<body id="page-top">

    <div id="wrapper">
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">

                </div>
                <div class="sidebar-brand-text mx-3">Aloha-Wind</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                <i class="fas fa-home" style="font-size:24px"></i>
                    <span>Inicio</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">
    
            <div class="sidebar-heading">
                Reservas clases
            </div>

            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fas fa-user-alt"></i>
                    <span>Clases surf</span>
                </a>
            </li>
           
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fas fa-user-alt"></i>
                    <span>Clases windsurf</span>
                </a>
            </li>

            <hr class="sidebar-divider">

            <div class="sidebar-heading">
                Alquiler materiales
            </div>

            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fas fa-user-alt"></i>
                    <span>Materiales surf</span>
                </a>
            </li>
           
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fas fa-user-alt"></i>
                    <span>Materiales windsurf</span>
                </a>
            </li>

            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Clientes
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="/pagina_admin/index_usuario.php">
                    <i class="fas fa-user-alt"></i>
                    <span>Clientes</span>
                </a>
            </li>

            <hr class="sidebar-divider">

            <div class="sidebar-heading">
                Monitores
            </div>

            <!-- MENU -->
            <li class="nav-item">
                <a class="nav-link" href="/pagina_admin/index_monitores.php">
                    <i class="far fa-id-badge" style="font-size:24px"></i>
                    <span>Monitores</span>
                </a>
            </li>


            <hr class="sidebar-divider">


            <div class="sidebar-heading">
                Materiales
            </div>

            <li class="nav-item">
                <a class="nav-link" href="/pagina_admin/index_tablas.php">
                    <i class="fas fa-snowboarding" style="font-size:24px"></i>
                    <span>Tablas</span></a>
            </li>


            <li class="nav-item">
                <a class="nav-link" href="/pagina_admin/index_neopreno.php">
                    <i class="fas fa-male" style="font-size:24px"></i>
                    <span>Neoprenos</span></a>
            </li>


            <li class="nav-item">
                <a class="nav-link" href="/pagina_admin/index_velas.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Velas</span></a>
            </li>

            <hr class="sidebar-divider">


            <div class="sidebar-heading">
                Tipo de clases
            </div>

            <li class="nav-item">
                <a class="nav-link" href="/pagina_admin/index_clases.php">
                    <i class="fas fa-chalkboard-teacher"></i>
                    <span>Tipo de clases</span>
                </a>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>


        </ul>
        <!-- End of Sidebar -->

        
        <div id="content-wrapper" class="d-flex flex-column">

            
            <div id="content">

               
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    
                    <ul class="navbar-nav ml-auto">

                        
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                      
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Informacion del administrador -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="/pagina_admin/index.php" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Administrador</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Despegable información usuario -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="/pagina_admin/index.php">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Perfil
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="/login/bd/logout.php" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Cerrar sesión
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->




<!-- INICIO CRUD -->
<div class="container">

    <h1>TIPO DE CLASES</h1>

<?php
include_once '/wamp64/www/aloha_wind/pagina_admin/bd/bd_clases/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$consulta = "SELECT id, tipo FROM tipo_clases";
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
                                <table id="tablaClases" class="table table-striped table-bordered table-condensed" style="width:100%">
                                <thead class="text-center">
                                    <tr>
                                        <th>Id</th>
                                        <th>Tipo</th>  
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php                            
                                    foreach($data as $dat) {                                                        
                                    ?>
                                    <tr>
                                        <td><?php echo $dat['id']?></td>
                                        <td><?php echo $dat['tipo']?></td>    
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
                    <form id="formClases">    
                        <div class="modal-body">
                            <div class="form-group">
                            <label for="tipo" class="col-form-label">Tipo:</label>
                            <input type="text" class="form-control" id="tipo">
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

</div>
        <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright © 2022 Aloha-Wind by Pedro Sánchez Palomino</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">¿Esta seguro que quiere salir?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Presione "Cerrar sesión" si quiere salir, para mantenerse en la sesión pulse "Cancelar".</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-primary" href="/login/iniciar_sesion.php">Cerrar sesión</a>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery, Popper.js, Bootstrap JS -->
    <script src="/libls/jquery/jquery-3.6.3.min.js"></script>
    <script src="/libls/popper/popper.min.js"></script>
    <script src="/libls/bootstrap/js/bootstrap.min.js"></script>



    <!-- Bootstrap core JavaScript-->
   
    <script src="/pagina_admin/vendor/jquery/jquery.min.js"></script>
    
    
    <script src="/pagina_admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    
    <script src="/pagina_admin/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    
    <script src="/pagina_admin/js/sb-admin-2.min.js"></script>

     <!-- datatables JS -->
    
     <script  type="text/javascript" src="/pagina_admin/vendor/datatables/datatables.min.js"></script>
     
     <!-- BOTONES DATATABLES -->
    <script src="vendor/datatables/Buttons-2.3.3/js/dataTables.buttons.min.js"></script>
    <script src="vendor/datatables/JSZip-2.5.0/jszip.min.js"></script>
    <script src="vendor/datatables/pdfmake-0.1.36/pdfmake.min.js"></script>
    <script src="vendor/datatables/pdfmake-0.1.36/vfs_fonts.js"></script>
    <script src="vendor/datatables/Buttons-2.3.3/js/buttons.html5.min.js"></script>
     
    <!-- Script main -->
    <script type="text/javascript" src="/pagina_admin/main/main_clases.js"></script>

</body>

</html>