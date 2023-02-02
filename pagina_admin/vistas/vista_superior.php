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

            <!-- Nav Item - Utilities Collapse Menu -->
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

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>


        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
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
                                <a class="dropdown-item" href="/login/iniciar_sesion.php" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Cerrar sesión
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->


