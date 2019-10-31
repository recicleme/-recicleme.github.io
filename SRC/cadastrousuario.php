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

<body class="hold-transition sidebar-mini layout-fixed" id="bodyLogin">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link"><img class="logo" src="../img/logo.png"></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Recicle seu resíduo</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Saiba mais sobre recicle-me</a>
                </li>

            </ul>

            <!-- SEARCH FORM -->
            <!--
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
-->


        </nav>
        <!-- /.navbar -->


        <!-- login-logo -->
        <div class="login-box">
            <div class="login-logo">
            </div>


            <!--Form cadastro de usuário-->
            <div class="register-box">
                <div class="register-logo">

                </div>

                <div class="card">
                    <div class="card-body register-card-body">
                        <p class="login-box-msg">Cadastre-se</p>

                        <form action="../../index.html" method="post">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="nomeUsuario" id="nomeUsuario" placeholder="Nome">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fa fa-user"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <input type="email" class="form-control" name="emailUsuario" id="emailUsuario" placeholder="Email">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fa fa-envelope"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <input type="password" class="form-control" name="senhaUsuario" id="senhaUsuario" placeholder="Senha">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fa fa-lock"></span>
                                    </div>
                                </div>
                            </div>





                            <!--ESSE 2 VÃO PRECISAR ?-->

                            <!--
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" id="inputPhone" placeholder="Telefone">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fa fa-phone"></span>
                                            </div>
                                        </div>
                                    </div>
-->


                            <!--
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" id="inputCEP" placeholder="CEP">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fa fa-map-pin"></span>
                                            </div>
                                        </div>
                                    </div>
-->


                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="enderecoUsuario" id="enderecoUsuario" placeholder="Endereço">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fa fa-location-arrow"></span>
                                    </div>
                                </div>
                            </div>

                            <!--Botão cadastro-->
                            <div class="row">

                                <div class="col-4">
                                    <button type="submit" class="btn btn-success  btn-flat">Cadastrar</button>
                                </div>

                            </div>
                        </form>



                    </div>
                </div>
            </div>

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