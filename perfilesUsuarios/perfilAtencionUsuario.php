<?php
    // 1. Validar sesión primero (si no ha iniciado sesión → fuera)
    include '../php/validar_sesion_be.php';

    // 2. Validar si el usuario pertenece al tablero
    $tableroRequerido = "AtencionUsuario";   // ← Cambia según el tablero
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
    <title>ATENCIÓN AL USUARIO</title>
    <link rel="stylesheet" href="../static/css/bootstrap.min.css">
    <link rel="stylesheet" href="../static/css/adminlte.min.css">
    <link rel="stylesheet" href="../static/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="../static/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="../static/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
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
            position: fixed ;
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
                    PERFIL ATENCIÓN AL USUARIO.
                </span>
            </div>
            <div>
                <a href="../php/logout.php" class="btn btn-danger btn-sm">
                    <i class="fas fa-sign-out-alt"></i> Cerrar Sesión
                </a>
            </div>
        </nav>
    </header>
    
    <br><br>

    <div class="container-fluid d-flex justify-content-center align-items-center">
        <div class="row">
            <div class="card border-info">
                <br>
                <!--INICIO BOTON BACK-->    
                    <a href="../login.php" class="btn"   style="width: 70px; height: 50px; border-color: transparent;">
                        <img style="width:70px; height:50px;" class="card-img-top" src="../static/img/flechaIzquierda.png" alt="Regresar Menu" >
                    </a>
                <!--FIN BOTON BACK--> 
                <h1 class="card-title text-center" style="margin:auto;"><b>ATENCIÓN AL USUARIO</b></h1>
                <div class="card-body">
                    <div class="card2 card-success">
                        <div class="container" style="background-color: #ffffffff;">
                            <table>
                                <tr align="center">
                                    <td>
                                        <!-- TÍTULO A LA IZQUIERDA -->
                                        <div class="col">
                                            <div class="card-header text-start"style="background-color: #ffffffff;" >
                                                <h6 class="my-0 font-weight-bold">REFERENCIA & CONTRAREFERENCIA</h6>
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
                                                        <h6 class="my-0 font-weight-bold">Referencia & Contrareferencia</h6>
                                                    </div>
                                                    <div class="card-body">
                                                        <button type="button" class="btn btn-light" data-toggle="modal" data-target="#modalReferencia">
                                                            <img src="../static/img/imgAtencionUsuario/AU1.png"
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
                                                <h6 class="my-0 font-weight-bold">AUTORIZACIONES AU</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        
                                        <!-- CARD A LA IZQUIERDA -->
                                        <div class="col">
                                            <div class="card-deck mb-3 d-flex justify-content-start">
                                                <div class="card mb-4 shadow-sm" style="width: 14rem;">
                                                    <div class="card-header">
                                                        <h6 class="my-0 font-weight-bold">Autorizaciones AU</h6>
                                                    </div>
                                                     <div class="card-body">
                                                        <button type="button" class="btn btn-light" data-toggle="modal" data-target="#modalAutorizaciones">
                                                            <img src="../static/img/imgAtencionUsuario/AU2.png"
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
                                                <h6 class="my-0 font-weight-bold">SOLICITUDES DE RECHAZO</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        
                                        <!-- CARD A LA IZQUIERDA -->
                                        <div class="col">
                                            <div class="card-deck mb-3 d-flex justify-content-start">
                                                <div class="card mb-4 shadow-sm" style="width: 14rem;">
                                                    <div class="card-header">
                                                        <h6 class="my-0 font-weight-bold">Solicitudes de Rechazo</h6>
                                                    </div>
                                                     <div class="card-body">
                                                        <button type="button" class="btn btn-light" data-toggle="modal" data-target="#modalSolicitudes">
                                                            <img src="../static/img/imgAtencionUsuario/AU3.png"
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
                                                <h6 class="my-0 font-weight-bold">INFORMACIÓN PQR</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        
                                        <!-- CARD A LA IZQUIERDA -->
                                        <div class="col">
                                            <div class="card-deck mb-3 d-flex justify-content-start">
                                                <div class="card mb-4 shadow-sm" style="width: 14rem;">
                                                    <div class="card-header">
                                                        <h6 class="my-0 font-weight-bold">Información PQR</h6>
                                                    </div>
                                                     <div class="card-body">
                                                        <button type="button" class="btn btn-light" data-toggle="modal" data-target="#modalpqr">
                                                            <img src="../static/img/imgAtencionUsuario/AU4.png"
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
                                                <h6 class="my-0 font-weight-bold">ENCUESTAS SATISFACCIÓN</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        
                                        <!-- CARD A LA IZQUIERDA -->
                                        <div class="col">
                                            <div class="card-deck mb-3 d-flex justify-content-start">
                                                <div class="card mb-4 shadow-sm" style="width: 14rem;">
                                                    <div class="card-header">
                                                        <h6 class="my-0 font-weight-bold">Encuesta Satisfacción</h6>
                                                    </div>
                                                     <div class="card-body">
                                                        <button type="button" class="btn btn-light" data-toggle="modal" data-target="#modalEncuesta">
                                                            <img src="../static/img/imgAtencionUsuario/AU5.png"
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
                                                <h6 class="my-0 font-weight-bold">TURNERO</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <!-- CARD A LA IZQUIERDA -->
                                        <div class="col">
                                            <div class="card-deck mb-3 d-flex justify-content-start">
                                                <div class="card mb-4 shadow-sm" style="width: 14rem;">
                                                    <div class="card-header">
                                                        <h6 class="my-0 font-weight-bold">Turnero</h6>
                                                    </div>
                                                     <div class="card-body">
                                                        <button type="button" class="btn btn-light" data-toggle="modal" data-target="#modalTurnero">
                                                            <img src="../static/img/imgAtencionUsuario/AU6.png"
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

    <br><br><br>

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

    <!------------------------------------------ Modal Power ref y contraref --------------------------------->
    <div class="modal fade" id="modalReferencia" tabindex="-1" aria-labelledby="modalReferenciaLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" style="max-width: 90%;">
            <div class="modal-content">
                <div class="modal-header" style="background-color:#038f03ff; color:white;">
                    <h5 class="modal-title" id="modalReferenciaLabel">Tablero referencia y contrareferencia</h5>
                    <button type="button" class="close text-white" data-dismiss="modal" aria-label="Cerrar">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body p-0">
                    <div class="iframe-container" style="position:relative; width:100%; padding-bottom:70%; height:520px; overflow:hidden;">
                    <iframe src="https://app.powerbi.com/view?r=eyJrIjoiNTI1NzMwMWMtZDQwZi00ZWRkLWJkZWMtNzUzYTZhOTI5ZGQzIiwidCI6ImIxMmQwMGE5LWZjYjMtNDgzNi1iMDk0LWU3ZWNmZDAyM2U5OSIsImMiOjR9"
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

    <!------------------------------------------ Modal Power autorizaciones AU --------------------------------->
    <div class="modal fade" id="modalAutorizaciones" tabindex="-1" aria-labelledby="modalAutorizacionesILabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" style="max-width: 90%;">
            <div class="modal-content">
                <div class="modal-header" style="background-color:#038f03ff; color:white;">
                    <h5 class="modal-title" id="modalAutorizacionesILabel">Tablero Autorizaciones AU</h5>
                    <button type="button" class="close text-white" data-dismiss="modal" aria-label="Cerrar">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body p-0">
                    <div class="iframe-container" style="position:relative; width:100%; padding-bottom:70%; height:520px; overflow:hidden;">
                    <iframe src="https://app.powerbi.com/view?r=eyJrIjoiMjgxYWE0ZmQtMmI5OC00OTc2LWFiMGMtYmVhZjI1OTE1OWJlIiwidCI6ImIxMmQwMGE5LWZjYjMtNDgzNi1iMDk0LWU3ZWNmZDAyM2U5OSIsImMiOjR9"
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
    <!------------------------------------------ Modal Power soli Rechazo --------------------------------->
    <div class="modal fade" id="modalSolicitudes" tabindex="-1" aria-labelledby="modalSolicitudesLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" style="max-width: 90%;">
            <div class="modal-content">
                <div class="modal-header" style="background-color:#038f03ff; color:white;">
                    <h5 class="modal-title" id="modalSolicitudesLabel">Tablero Solicitudes de Rechazo</h5>
                    <button type="button" class="close text-white" data-dismiss="modal" aria-label="Cerrar">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body p-0">
                    <div class="iframe-container" style="position:relative; width:100%; padding-bottom:70%; height:520px; overflow:hidden;">
                    <iframe src="https://app.powerbi.com/view?r=eyJrIjoiYjkxNzIwM2ItZDhkOS00MTM5LTkxNzctNzY5ZTU0NGY5NDJkIiwidCI6ImIxMmQwMGE5LWZjYjMtNDgzNi1iMDk0LWU3ZWNmZDAyM2U5OSIsImMiOjR9"
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
    <!------------------------------------------ Modal Power inf pqr --------------------------------->
    <div class="modal fade" id="modalpqr" tabindex="-1" aria-labelledby="modalpqrLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" style="max-width: 90%;">
            <div class="modal-content">
                <div class="modal-header" style="background-color:#038f03ff; color:white;">
                    <h5 class="modal-title" id="modalpqrLabel">Tablero Informacion PQR</h5>
                    <button type="button" class="close text-white" data-dismiss="modal" aria-label="Cerrar">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body p-0">
                    <div class="iframe-container" style="position:relative; width:100%; padding-bottom:70%;height:520px; overflow:hidden;">
                    <iframe src="https://app.powerbi.com/view?r=eyJrIjoiZWMyYmJmNzQtMWFmYy00MmNhLTk3MzgtMmQ5YmZjNzYwNzExIiwidCI6ImIxMmQwMGE5LWZjYjMtNDgzNi1iMDk0LWU3ZWNmZDAyM2U5OSIsImMiOjR9"
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
    <!------------------------------------------ Modal Power encu Satisfacción --------------------------------->
    <div class="modal fade" id="modalEncuesta" tabindex="-1" aria-labelledby="modalEncuestaLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" style="max-width: 90%;">
            <div class="modal-content">
                <div class="modal-header" style="background-color:#038f03ff; color:white;">
                    <h5 class="modal-title" id="modalEncuestaLabel">Tablero Encuestas de Satisfacción</h5>
                    <button type="button" class="close text-white" data-dismiss="modal" aria-label="Cerrar">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body p-0">
                    <div class="iframe-container" style="position:relative; width:100%; padding-bottom:70%; height:520px; overflow:hidden;">
                    <iframe src="https://app.powerbi.com/view?r=eyJrIjoiOGJiMjgzNGMtM2RhZC00ZTk4LTk4YTEtMGZmOGQwMGNhZjc3IiwidCI6ImIxMmQwMGE5LWZjYjMtNDgzNi1iMDk0LWU3ZWNmZDAyM2U5OSIsImMiOjR9"
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
    <!------------------------------------------ Modal Power turnero --------------------------------->
    <div class="modal fade" id="modalTurnero" tabindex="-1" aria-labelledby="modalTurneroLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" style="max-width: 90%;">
            <div class="modal-content">
                <div class="modal-header" style="background-color:#038f03ff; color:white;">
                    <h5 class="modal-title" id="modalTurneroLabel">Tablero Turnero</h5>
                    <button type="button" class="close text-white" data-dismiss="modal" aria-label="Cerrar">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body p-0">
                    <div class="iframe-container" style="position:relative; width:100%; padding-bottom:70%; height:520px; overflow:hidden;">
                    <iframe src="https://app.powerbi.com/view?r=eyJrIjoiM2M1MTkwZGItYTk4ZS00YjA4LThhYjEtOWEwZmYyMTg5NWIwIiwidCI6ImIxMmQwMGE5LWZjYjMtNDgzNi1iMDk0LWU3ZWNmZDAyM2U5OSIsImMiOjR9"
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
</body>



</html>
