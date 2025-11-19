<?php
    // 1. Validar sesión primero (si no ha iniciado sesión → fuera)
    include '../php/validar_sesion_be.php';

    // 2. Validar si el usuario pertenece al tablero
    $tableroRequerido = "Saos";   // ← Cambia según el tablero
    include '../php/validar_tablero.php';
    // Incluir menú lateral
    include '../php/menu_lateral.php';
?>



<!DOCTYPE html> 
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SAOS</title>
    <link rel="stylesheet" href="{{ url_for('../static', filename='css/style.css')}}">
    <link rel="icon" type="image/x-icon" href="../assets/images/icon.jpg">
    <link rel="stylesheet" type="text/css" href="../static/css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../static/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="../static/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <link rel="stylesheet" href="../static/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <link rel="stylesheet" href="../static/plugins/jqvmap/jqvmap.min.css">
    <link rel="stylesheet" href="{{ url_for('../static', filename='css/adminlte.min.css')}}">
    <link rel="stylesheet" href="../static/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="../static/plugins/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="../static/plugins/summernote/summernote-bs4.min.css">
    <link rel="stylesheet" href="../static/css/adminlte.min.css">
    <link rel="stylesheet" type="text/css" href="../static/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Fuzzy+Bubbles:wght@700&family=Source+Serif+Pro:ital,wght@1,600&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script type="text/javascript" src="../static/js/bootstrap.min.js"></script>

    <style>
        .card-img-top {
            transition: transform 0.4s ease, box-shadow 0.4s ease;
        }


        .card-img-top:hover {
            transform: scale(1.15);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.4);
        }
        .footer-fixed {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            background: #fff; /* puedes cambiar el color */
            border-top: 1px solid #ddd;
            text-align: center;
            padding: 10px;
            z-index: 1030; /* asegura que quede encima de otros elementos */
        }
    </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed" style="background-image: url('../static/img/fondo5.png');background-size: cover;background-repeat: no-repeat; background-position: center;background-attachment: fixed;">

    <!--------------------------------------LOGO MALLAMAS CON ANIMACIONAL INICIO DE CADA VENTANA------------------------------------------------------->
    <div class="wrapper">
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="../static/img/logonegro.png" alt="MllS" height="150" width="150">
        </div>
    </div>
    <!--------------------------------------------------------------------------------------------->

   <header>
        <nav id="navbar-example2" class="navbar px-3 mb-3 d-flex justify-content-between align-items-center" style="background-color: #038f03ff;">
            <div class="d-flex align-items-center">
                <a href="../index.php" class="brand-link">
                    <img src="../static/img/CycLogo.png" alt="MLLS LOGO" class="brand-image">
                </a>
                <span style="color:white; font-weight:bold; margin-left:15px;">
                    PERFIL SAOS.
                </span>
            </div>
            <div>
                <a href="../php/logout.php" class="btn btn-danger btn-sm">
                    <i class="fas fa-sign-out-alt"></i> Cerrar Sesión
                </a>
            </div>
        </nav>
    </header>
    
    <br>

    <div class="container-fluid d-flex justify-content-center align-items-center">
        <div class="row">
            <div class="card border-info">
                <br>
                <!--INICIO BOTON BACK-->    
                    <a href="../login.php" class="btn"   style="width: 70px; height: 50px; border-color: transparent;">
                        <img style="width:70px; height:50px;" class="card-img-top" src="../static/img/flechaIzquierda.png" alt="Regresar Menu" >
                    </a>
                <!--FIN BOTON BACK--> 
                <h1 class="card-title text-center" style="margin:auto;"><b>SAOS</b></h1>
                <div class="card-body">
                    <div class="card2 card-success">
                        <div class="container" style="background-color: #ffffffff;">
                            <table>
                                <tr align="center">
                                    <td>
                                        <!-- TÍTULO A LA IZQUIERDA -->
                                        <div class="col">
                                            <div class="card-header text-start"style="background-color: #ffffffff;" >
                                                <h6 class="my-0 font-weight-bold">FICHA IFASORIS</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <br>
                                        <!-- CARD A LA IZQUIERDA -->
                                        <div class="col">
                                            <div class="card-deck mb-3 d-flex justify-content-start">
                                                <div class="card mb-4 shadow-sm" style="width: 14rem;">
                                                    <div class="card-header">
                                                        <h6 class="my-0 font-weight-bold">Ficha</h6>
                                                    </div>
                                                    <div class="card-body">
                                                        <button type="button" class="btn btn-light" data-toggle="modal" data-target="#modalFicha">
                                                            <img src="../static/img/imgSaos/SA1.png"
                                                                class="card-img-top"
                                                                style="width:100px; height:100px; object-fit:contain; display:block; margin:auto;"
                                                                alt="MallamasImg">
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr align="center">
                                    <td>
                                        <!-- TÍTULO A LA IZQUIERDA -->
                                        <div class="col">
                                            <div class="card-header text-start"style="background-color: #ffffffff;" >
                                                <h6 class="my-0 font-weight-bold">ACTIVIDADES DIFERENCIALES</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        
                                        <!-- CARD A LA IZQUIERDA -->
                                        <div class="col">
                                            <div class="card-deck mb-3 d-flex justify-content-start">
                                                <div class="card mb-4 shadow-sm" style="width: 14rem;">
                                                    <div class="card-header">
                                                        <h6 class="my-0 font-weight-bold">Actividades Diferenciales </h6>
                                                    </div>
                                                    <div class="card-body">
                                                        <button type="button" class="btn btn-light" data-toggle="modal" data-target="#modalActDif">
                                                            <img src="../static/img/imgSaos/SA2.png"
                                                                class="card-img-top"
                                                                style="width:100px; height:100px; object-fit:contain; display:block; margin:auto;"
                                                                alt="MallamasImg">
                                                        </button>
                                                    </div>
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
    <br><br><br><br>

    <!-------------------------------------------BARRA FINAL COPYRIGHT-------------------------------------------------->
     <footer class="footer-fixed">
        <strong>Copyright &copy; 2025 <a target="_blank">COORDINACIÓN ESTADÍSTICA</a></strong> Todos los derechos
        reservados.
        <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 1.1.0
        </div>
    </footer>
    <aside class="control-sidebar control-sidebar-dark"></aside>
    <!--------------------------------------------------------------------------------------------->



    <!------------------------------------------ Modal Power bi FICHA IFASORIS --------------------------------->
    <div class="modal fade" id="modalFicha" tabindex="-1" aria-labelledby="modalFichaLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" style="max-width: 90%;">
            <div class="modal-content">
                <div class="modal-header" style="background-color:#038f03ff; color:white;">
                    <h5 class="modal-title" id="modalFichaLabel">Tablero FICHA IFASOR</h5>
                    <button type="button" class="close text-white" data-dismiss="modal" aria-label="Cerrar">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body p-0">
                    <div class="iframe-container" style="position:relative; width:100%; padding-bottom:70%; height:0; overflow:hidden;">
                    <iframe src="https://app.powerbi.com/view?r=eyJrIjoiMjhkYWM1YzUtNGQ3OS00ODFiLTkxNDMtN2U2MTk2YTcyYjI0IiwidCI6ImIxMmQwMGE5LWZjYjMtNDgzNi1iMDk0LWU3ZWNmZDAyM2U5OSIsImMiOjR9"
                            allowFullScreen="true"
                            style="position:absolute; top:0; left:0; width:100%; height:100%; border:none;">
                    </iframe>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    <!--------------------------------------------------------------------------------------------->  

    <!------------------------------------------ Modal Power bi ACTIVIDADES DIFERENCIALES  --------------------------------->
    <div class="modal fade" id="modalActDif" tabindex="-1" aria-labelledby="modalActDifLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" style="max-width: 90%;">
            <div class="modal-content">
                <div class="modal-header" style="background-color:#038f03ff; color:white;">
                    <h5 class="modal-title" id="modalActDifLabel">Tablero ACTIVIDADES DIFERENCIALES </h5>
                    <button type="button" class="close text-white" data-dismiss="modal" aria-label="Cerrar">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body p-0">
                    <div class="iframe-container" style="position:relative; width:100%; padding-bottom:70%; height:0; overflow:hidden;">
                    <iframe src="https://app.powerbi.com/view?r=eyJrIjoiYmNlZjQ5ZjYtYTNmZC00YzNiLTgxMTMtMTk0NDZkNjI5ZmIyIiwidCI6ImIxMmQwMGE5LWZjYjMtNDgzNi1iMDk0LWU3ZWNmZDAyM2U5OSIsImMiOjR9"
                            allowFullScreen="true"
                            style="position:absolute; top:0; left:0; width:100%; height:100%; border:none;">
                    </iframe>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    <!--------------------------------------------------------------------------------------------->  
   
    <script src="../static/plugins/jquery/jquery.min.js"></script>
    <script src="../static/plugins/jquery-ui/jquery-ui.min.js"></script>
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <script src="../static/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../static/plugins/chart.js/Chart.min.js"></script>
    <script src="../static/plugins/sparklines/sparkline.js"></script>
    <script src="../static/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="../static/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <script src="../static/plugins/jquery-knob/jquery.knob.min.js"></script>
    <script src="../static/plugins/moment/moment.min.js"></script>
    <script src="../static/plugins/daterangepicker/daterangepicker.js"></script>
    <script src="../static/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="../static/plugins/summernote/summernote-bs4.min.js"></script>
    <script src="../static/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <script src="../static/js/adminlte.js"></script>
    <script src="../static/js/pages/dashboard.js"></script>
    <script src="../static/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
    <script src="../static/js/adminlte.min.js"></script>   
    <script src="../static/js/confirmacion.js"></script>
    <script src="../static/plugins/jquery/jquery.min.js"></script> 
    <script src="../static/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>



</html>
