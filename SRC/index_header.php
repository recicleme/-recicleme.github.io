<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Recicle-me</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="../plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="../plugins/summernote/summernote-bs4.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>



<link rel="icon" type="image/png" href="../img/favicon.png">

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Navbar links-->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="../SRC/index.php" class="nav-link"><img class="logo" src="../img/logo.png"></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Porque reciclar seu resíduo?</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Saiba mais sobre recicle-me</a>
                </li>

            </ul>

            <!-- SEARCH FORM -->
            <form class="form-inline ml-3">
                <div class="input-group input-group-sm">
                    <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>

                    </div>
                </div>
            </form>







            <!-- Right navbar links -->
            <!--
            <ul class="navbar-nav ml-auto">
                 Messages Dropdown Menu 
                <li class="nav-item dropdown">
                    <a href="cadastrousuario.html"><button type="button" class="btn btn-success btn-sm">Cadastrar</button></a>
                    <a href="login.php"><button type="button" class="btn btn-success btn-sm">Entrar</button> &nbsp;


                </li>
-->


            </ul>
        </nav>


        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Logo -->
            <a href="../SRC/index.php" class="brand-link">
                <img src="../img/icone.png" alt="icone" class="icone">

            </a>
            <div></div>
            <!-- Sidebar da esquerda -->
            <div class="sidebar">
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Dicas
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="../SRC/sustentabilidade.php" class="nav-link">
                                        <i class="fas fa-leaf"></i>
                                        <p>Sustentabilidade</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../SRC/ecoArte.php" class="nav-link">
                                        <i class="fas fa-recycle"></i>
                                        <p>EcoArte</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-location-arrow"></i>
                                <p>
                                    Locais
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="../SRC/empresa.php" class="nav-link">
                                        <i class="fas fa-building"></i>
                                        <p>Empresa</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../SRC/coleta.php" class="nav-link">
                                        <i class="fas fa-map-marked-alt"></i>
                                        <p>Coleta</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-pen-square"></i>
                                <p>
                                    Itens
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="../SRC/cadastroItens.php" class="nav-link">
                                        <i class="far fa-sticky-note"></i>
                                        <p>Cadastrar</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../SRC/listaItens.php" class="nav-link">
                                        <i class="far fa-list-alt"></i>
                                        <p>Cadastrados</p>
                                    </a>
                                </li>
                            </ul>
                        </li>




                </nav>
            </div>
        </aside>
    </div>
</body>

</html>


<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="../plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="../plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="../plugins/jqvmap/maps/jquery.vmap.world.js"></script>
<!-- jQuery Knob Chart -->
<script src="../plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../plugins/moment/moment.min.js"></script>
<script src="../plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>