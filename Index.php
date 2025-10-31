<?php
    include 'bd/conexion.php';
    session_start();

    // Si ya está logueado, redirigir directamente a su perfil
    if (isset($_SESSION['login']) && $_SESSION['login'] === true) {
        $perfil = $_SESSION['perfil'];
        header("Location: perfilesUsuarios/perfil$perfil.php");
        exit;
    }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableros de control</title>
    <link rel="stylesheet" href="{{ url_for('static', filename='css/style.css')}}">
    <link rel="icon" type="image/x-icon" href="assets/images/icon.jpg">
    <link rel="stylesheet" type="text/css" href="static/css/style.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="static/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="static/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <link rel="stylesheet" href="static/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <link rel="stylesheet" href="static/plugins/jqvmap/jqvmap.min.css">
    <link rel="stylesheet" href="{{ url_for('static', filename='css/adminlte.min.css')}}">
    <link rel="stylesheet" href="static/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="static/plugins/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="static/plugins/summernote/summernote-bs4.min.css">
    <link rel="stylesheet" href="static/css/adminlte.min.css">
    <link rel="stylesheet" type="text/css" href="static/css/bootstrap.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Fuzzy+Bubbles:wght@700&family=Source+Serif+Pro:ital,wght@1,600&display=swap"
        rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
        integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk"
        crossorigin="anonymous"></script>
    <script type="text/javascript" src="static/js/bootstrap.min.js"></script>

    <style>
        .card-img-top {
            transition: transform 0.4s ease, box-shadow 0.4s ease;
        }


        .card-img-top:hover {
            transform: scale(1.15);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.4);
        }
    </style>

</head>

<body class="hold-transition sidebar-mini layout-fixed">

    <div class="wrapper ">
        <!--------------------------------------LOGO MALLAMAS CON ANIMACIONAL INICIO DE CADA VENTANA------------------------------------------------------->
        <div class="wrapper">
            <div class="preloader flex-column justify-content-center align-items-center">
                <img class="animation__shake" src="static/img/logonegro.png" alt="MllS" height="150" width="150">
            </div>
        </div>
        <!--------------------------------------------------------------------------------------------->


        <!----------------------------------------BARRA LATERAL DE OPCIONES ----------------------------------------------------->
        <aside class="main-sidebar sidebar-dark-info elevation-4">
            <a href="index.php" class="brand-link">
                <img src="static/img/logoCuadros.png" alt="MLLS LOGO" class="brand-image img-circle elevation-3">
                <span class="brand-text font-weight-light">MALLAMAS</span>
            </a>

            <div class="sidebar">

                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">

                        <li class="nav-item">
                            <a href="mailto:contactenos@mallamaseps.com" class="nav-link">
                                <i class="nav-icon fas fa-users"></i>
                                <p>Contactanos</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="http://190.121.144.12:8009/PQR" class="nav-link">
                                <i class="nav-icon fas fa-file"></i>
                                <p>Quejas y reclamos</p>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!--------------------------------------------------------------------------------------------->


        <!-------------------------------------BTONES DE REEENVÍO DEL TABLERO DE CONTROL------------------------------------------------------>
   

       
        <div class="content-wrapper w" style=" background: url('static/img/fondo4.png');">
            <div class="content-header">
                <div class="container-fluid text-center">
                    <div class="row mb-10">
                        <br><br>
                        <div id="contenedor" class="col-10">
                            <div class="card border-info">
                                <div class="card-body">
                                    <div class="col-md-12">
                                        <div class="card2 card-success">
                                            <div class="card-header">
                                                <h2 class="card-title" style="margin:auto;" set>TABLEROS DE CONTROL</h2>
                                            </div>
                                            <div class="container " style="background-color: #BFC4C4;">
                                                <br>
                                                <table style="table-layout: fixed; width: 100%;">
                                                    <tr><!-------FILA 1---->
                                                        <td style="width: 150px;">
                                                            <div class="card-deck mb-3 text-center">
                                                                <div class="card mb-4 shadow-sm">
                                                                    <div class="card-header">
                                                                        <h6 class="my-0 font-weight-bold"> ATENCIÓN AL USUARIO </h6>
                                                                    </div>
                                                                    <div class="card-body">

                                                                        <a href="login.php?id=1" >
                                                                            <img src="static/img/c1.png"
                                                                                class="card-img-top"
                                                                                style="width:100px; height:100px; object-fit:contain; display:block; margin:auto;"
                                                                                alt="MallamasImg">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td style="width: 150px;">
                                                            <div class="card-deck mb-3 text-center">
                                                                <div class="card mb-4 shadow-sm">
                                                                    <div class="card-header">
                                                                        <h6 class="my-0 font-weight-bold"> ALMACEN </h6>
                                                                    </div>
                                                                    <div class="card-body">

                                                                        <a href="login.php?id=2" >
                                                                            <img src="static/img/c2.png"
                                                                                class="card-img-top"
                                                                                style="width:100px; height:100px; object-fit:contain; display:block; margin:auto;"
                                                                                alt="MallamasImg">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td style="width: 150px;">
                                                            <div class="card-deck mb-3 text-center">
                                                                <div class="card mb-4 shadow-sm">
                                                                    <div class="card-header">
                                                                        <h6 class="my-0 font-weight-bold"> ASEGURAMIENTO
                                                                        </h6>
                                                                    </div>
                                                                    <div class="card-body">

                                                                        <a href="login.php?id=3" >
                                                                            <img src="static/img/c3.png"
                                                                                class="card-img-top"
                                                                                style="width:100px; height:100px; object-fit:contain; display:block; margin:auto;"
                                                                                alt="MallamasImg">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td style="width: 150px;">
                                                            <div class="card-deck mb-3 text-center">
                                                                <div class="card mb-4 shadow-sm">
                                                                    <div class="card-header">
                                                                        <h6 class="my-0 font-weight-bold">SISTEMAS INTEGRADOS </h6>
                                                                    </div>
                                                                    <div class="card-body">

                                                                        <a href="login.php?id=4" >
                                                                            <img src="static/img/c4.png"
                                                                                class="card-img-top"
                                                                                style="width:100px; height:100px; object-fit:contain; display:block; margin:auto;"
                                                                                alt="MallamasImg">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr><!-------FILA 2---->
                                                        <td>
                                                            <div class="card-deck mb-3 text-center">
                                                                <div class="card mb-4 shadow-sm">
                                                                    <div class="card-header">
                                                                        <h6 class="my-0 font-weight-bold">CARTERA</h6>
                                                                    </div>
                                                                    <div class="card-body">

                                                                        <a href="login.php?id=5" >
                                                                            <img src="static/img/c5.png"
                                                                                class="card-img-top"
                                                                                style="width:100px; height:100px; object-fit:contain; display:block; margin:auto;"
                                                                                alt="MallamasImg">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="card-deck mb-3 text-center">
                                                                <div class="card mb-4 shadow-sm">
                                                                    <div class="card-header">
                                                                        <h6 class="my-0 font-weight-bold">COMUNICACIONES
                                                                        </h6>
                                                                    </div>
                                                                    <div class="card-body">

                                                                        <a href="login.php?id=6" >
                                                                            <img src="static/img/c6.png"
                                                                                class="card-img-top"
                                                                                style="width:100px; height:100px; object-fit:contain; display:block; margin:auto;"
                                                                                alt="MallamasImg">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="card-deck mb-3 text-center">
                                                                <div class="card mb-4 shadow-sm">
                                                                    <div class="card-header">
                                                                        <h6 class="my-0 font-weight-bold">CONTABILIDAD
                                                                        </h6>
                                                                    </div>
                                                                    <div class="card-body">

                                                                        <a href="login.php?id=7" >
                                                                            <img src="static/img/c7.png"
                                                                                class="card-img-top"
                                                                                style="width:100px; height:100px; object-fit:contain; display:block; margin:auto;"
                                                                                alt="MallamasImg">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="card-deck mb-3 text-center">
                                                                <div class="card mb-4 shadow-sm">
                                                                    <div class="card-header">
                                                                        <h6 class="my-0 font-weight-bold">SAOS</h6>
                                                                    </div>
                                                                    <div class="card-body">

                                                                        <a href="login.php?id=8" >
                                                                            <img src="static/img/c8.png"
                                                                                class="card-img-top"
                                                                                style="width:100px; height:100px; object-fit:contain; display:block; margin:auto;"
                                                                                alt="MallamasImg">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr><!-------FILA 3---->
                                                        <td>
                                                            <div class="card-deck mb-3 text-center">
                                                                <div class="card mb-4 shadow-sm">
                                                                    <div class="card-header">
                                                                        <h6 class="my-0 font-weight-bold">CONTRATACIONES
                                                                        </h6>
                                                                    </div>
                                                                    <div class="card-body">

                                                                        <a href="login.php?id=9" >
                                                                            <img src="static/img/c9.png"
                                                                                class="card-img-top"
                                                                                style="width:100px; height:100px; object-fit:contain; display:block; margin:auto;"
                                                                                alt="MallamasImg">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="card-deck mb-3 text-center">
                                                                <div class="card mb-4 shadow-sm">
                                                                    <div class="card-header">
                                                                        <h6 class="my-0 font-weight-bold">TABLEROS</h6>
                                                                    </div>
                                                                    <div class="card-body">

                                                                        <a href="login.php?id=10" >
                                                                            <img src="static/img/c10.png"
                                                                                class="card-img-top"
                                                                                style="width:100px; height:100px; object-fit:contain; display:block; margin:auto;"
                                                                                alt="MallamasImg">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="card-deck mb-3 text-center">
                                                                <div class="card mb-4 shadow-sm">
                                                                    <div class="card-header">
                                                                        <h6 class="my-0 font-weight-bold">SISTEMAS </h6>
                                                                    </div>
                                                                    <div class="card-body">

                                                                        <a href="login.php?id=11" >
                                                                            <img src="static/img/c11.png"
                                                                                class="card-img-top"
                                                                                style="width:100px; height:100px; object-fit:contain; display:block; margin:auto;"
                                                                                alt="MallamasImg">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="card-deck mb-3 text-center">
                                                                <div class="card mb-4 shadow-sm">
                                                                    <div class="card-header">
                                                                        <h6 class="my-0 font-weight-bold">GESTION DEL RIESGO</h6>
                                                                    </div>
                                                                    <div class="card-body">

                                                                        <a href="login.php?id=12" >
                                                                            <img src="static/img/c12.png"
                                                                                class="card-img-top"
                                                                                style="width:100px; height:100px; object-fit:contain; display:block; margin:auto;"
                                                                                alt="MallamasImg">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr><!-------FILA 4---->
                                                        <td>
                                                            <div class="card-deck mb-3 text-center">
                                                                <div class="card mb-4 shadow-sm">
                                                                    <div class="card-header">
                                                                        <h6 class="my-0 font-weight-bold"> <br> PLANEACIÓN </h6>
                                                                    </div>
                                                                    <div class="card-body">

                                                                        <a href="login.php?id=13" >
                                                                            <img src="static/img/c13.png"
                                                                                class="card-img-top"
                                                                                style="width:100px; height:100px; object-fit:contain; display:block; margin:auto;"
                                                                                alt="MallamasImg">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="card-deck mb-3 text-center">
                                                                <div class="card mb-4 shadow-sm">
                                                                    <div class="card-header">
                                                                        <h6 class="my-0 font-weight-bold">RADICACIÓN Y AUDITORÍA DE CUENTAS</h6>
                                                                    </div>
                                                                    <div class="card-body">

                                                                        <a href="login.php?id=14" >
                                                                            <img src="static/img/c14.png"
                                                                                class="card-img-top"
                                                                                style="width:100px; height:100px; object-fit:contain; display:block; margin:auto;"
                                                                                alt="MallamasImg">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="card-deck mb-3 text-center">
                                                                <div class="card mb-4 shadow-sm">
                                                                    <div class="card-header">
                                                                        <h6 class="my-0 font-weight-bold"><br> RECOBROS
                                                                        </h6>
                                                                    </div>
                                                                    <div class="card-body">

                                                                        <a href="login.php?id=15" >
                                                                            <img src="static/img/c15.png"
                                                                                class="card-img-top"
                                                                                style="width:100px; height:100px; object-fit:contain; display:block; margin:auto;"
                                                                                alt="MallamasImg">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="card-deck mb-3 text-center">
                                                                <div class="card mb-4 shadow-sm">
                                                                    <div class="card-header">
                                                                        <h6 class="my-0 font-weight-bold"><br> TESORERÍA
                                                                        </h6>
                                                                    </div>
                                                                    <div class="card-body">

                                                                        <a href="login.php?id=16" >
                                                                            <img src="static/img/c16.png"
                                                                                class="card-img-top"
                                                                                style="width:100px; height:100px; object-fit:contain; display:block; margin:auto;"
                                                                                alt="MallamasImg">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--------------------------------------------------------------------------------------------->


        <!-------------------------------------------BARRA FINAL COPYRIGHT-------------------------------------------------->
        <footer class="main-footer">
            <strong>Copyright &copy; 2025 <a target="_blank">COORDINACIÓN ESTADÍSTICA</strong> Todos los derechos
            reservados.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 1.1.0
            </div>
        </footer>
        <aside class="control-sidebar control-sidebar-dark"></aside>
        <!--------------------------------------------------------------------------------------------->
    </div>

    <!--------------------------------------------------------------------------------------------->
    <script src="static/plugins/jquery/jquery.min.js"></script>
    <script src="static/plugins/jquery-ui/jquery-ui.min.js"></script>
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <script src="static/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="static/plugins/chart.js/Chart.min.js"></script>
    <script src="static/plugins/sparklines/sparkline.js"></script>
    <script src="static/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="static/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <script src="static/plugins/jquery-knob/jquery.knob.min.js"></script>
    <script src="static/plugins/moment/moment.min.js"></script>
    <script src="static/plugins/daterangepicker/daterangepicker.js"></script>
    <script src="static/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="static/plugins/summernote/summernote-bs4.min.js"></script>
    <script src="static/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <script src="static/js/adminlte.js"></script>
    <script src="static/js/pages/dashboard.js"></script>
    <script src="static/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
    <script src="static/js/adminlte.min.js"></script>
    <!--------------------------------------------------------------------------------------------->
</body>

</html>