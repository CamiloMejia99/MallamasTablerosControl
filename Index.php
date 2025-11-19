<?php
    session_start();

   // Si ya inició sesión, no permitir regresar al login
    if (isset($_SESSION['login']) && $_SESSION['login'] === true) {
        header("Location: login.php");
        exit;
    }

    // Impedir que el navegador guarde la página en caché/historial
    header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
    header("Cache-Control: post-check=0, pre-check=0", false);
    header("Pragma: no-cache");
    header("Expires: 0");



?>


<!DOCTYPE html> 
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Iniciar sesion</title>
    <link rel="icon" type="image/x-icon" href="assets/images/icon.jpg">
    <link rel="stylesheet" type="text/css" href="static/css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
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
    <link href="https://fonts.googleapis.com/css2?family=Fuzzy+Bubbles:wght@700&family=Source+Serif+Pro:ital,wght@1,600&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script type="text/javascript" src="static/js/bootstrap.min.js"></script>

    <style>
        .links {
            font-size: 14px;
        }
        .links a {
            color: #005599;
            text-decoration: none;
        }
        .links a:hover {
            text-decoration: underline;
        }
        .login-container {
            background-color: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }
        .card-img-top {
            transition: transform 0.4s ease, box-shadow 0.4s ease;
        }

        .card-img-top:hover {
            transform: scale(1.15);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.4);
        }
       
        .footer-fixed {
            /* position: fixed; */
            bottom: 0;
            left: 0;
            width: 100%;
            background: #fff; /* puedes cambiar el color */
            border-top: 1px solid #ddd;
            text-align: center;
            padding: 10px;
            z-index: 1030; /* asegura que quede encima de otros elementos */
        }

        button.btn-success {
            padding: 10px 0 !important;
            height: auto !important;
            line-height: 1.5 !important;
            font-size: 16px;
            border-radius: 8px;
        }
    </style>
 
</head>

<body class="hold-transition sidebar-mini layout-fixed" style="background-image: url('static/img/fondo3.png');background-size: cover;background-repeat: no-repeat; background-position: center;">

    <!--LOGO MALLAMAS CON ANIMACIONAL INICIO DE CADA VENTANA-->
    <div class="wrapper">
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="static/img/logonegro.png" alt="MllS" height="150" width="150">
        </div>
    </div>
    <!-------------------------------------------------------->



    <!--INICIO BARRA SUPERIOR-->  
   <header>
        <nav id="navbar-example2" class="navbar px-3 mb-3" style="background-color: #038f03ff;">
            <a href="index.php" class="brand-link">
                <img src="static/img/CycLogo.png" alt="MLLS LOGO" class="brand-image ">
            </a>
          
        </nav>
    </header>
    <!--INICIO BARRA INFERIOR-->  



     
	<div class="row h-100 justify-content-center align-items-center ">

        <!--INICIO CONTENEDOR PRINCIPAL-->   
		<div class="card col-11 border-black" style="background-color: #ffffffff;" >
            <div class="container mt-2 rounded">
                <!-- Fila 1 -->
                <div class="row text-center border rounded">
                    <div class="col-1  p-2">
                       
                    </div>
                    <div class="col-10  p-2">
                        <h1 class="text-success"><b>Sistema de Gestión de Tableros de Control</b></h1>
                    </div>
                    <div class="col-1  p-2"></div>
                 </div>
                <!-- Fila 2 -->
                <div class="row text-left  border rounded">
                    <div class="col-12 p-2">
                        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="static/img/carrucel/carr1.png" class="d-block w-100" height="400">
                                </div>
                                <div class="carousel-item">
                                    <img src="static/img/carrucel/carr2.png" class="d-block w-100" height="400">
                                </div>
                                <div class="carousel-item">
                                    <img src="static/img/carrucel/carr3.png" class="d-block w-100" height="400">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" style="background-color: #84BB4E;"
                                    aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon " style="background-color: #84BB4E;"
                                    aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Fila 3 -->
                <div class="row text-center border rounded">
                    <div class="col-4  p-2">
                        <!--INICIO LOGIN-->
                        
                        <div class="login-container">
                            <h4 id="scrollspyHeading1"><b>Iniciar Sesión </b></h4>
                            <div class="col-100">
                                <form class="row g-3" name="contacto"  method="POST" action="php/iniciarSesion.php">
                                    <div class="container" align="left">
                                        <br>
                                        <Label style= "color: #555;">Usuario:</Label>
                                        <input type="text" name="codigo" placeholder="" class="form-control" id="validationDefault05" required>
                                        <Label style = "color: #555">Contraseña:</Label>
                                        <input type="password" name="contraseña" autocomplete="new-password" placeholder=" " class="form-control" id="validationDefault05" required>
                                        <br><button class="btn btn-success border-dark text-white  w-100 " name="enviar" >Iniciar Sesion</button>
                                        <input type="hidden" name="idTablero" value="<?php echo $id; ?>">
                                    </div>
                                </form>
                                <br>
                                <div  class="links">
                                    <p><a href="#recuperarContraseña">¿Olvidaste tu contraseña?</a><br>
                                    ¿No tienes cuenta? <a href="php/SolicitudesRegistro.php">Solicita tu Registro aquí</a></p>
                                </div>
                            </div>
                        </div>
                        <!--FIN LOGIN-->
                    </div>
                    <div class="col-8  border rounded p-2">
                        <!-- TARJETA DE PRESENTACIÓN -->
                        <div class="card shadow-lg border-0" style="background: linear-gradient(135deg, #e3f2fd, #ffffff); border-radius: 15px;">
                            <div class="card-body text-start p-4">
                                <div class="d-flex align-items-center mb-3">
                                    <img src="static/img/logoCuadros.png" alt="Logo Mallamas" style="width: 60px; height: 60px; margin-right: 15px;">
                                    <h4 class="fw-bold text-success mb-0">Sistema de Gestión de Tableros de Control</h4>
                                </div><br>
                                
                                <p style="color: #333; font-size: 15px; text-align: justify;">
                                    Bienvenido al sistema <b>Sistema de Gestión de Tableros de Control</b>, una herramienta desarrollada para optimizar la administración de los tableros de gestión institucionales.
                                    Este sistema permite gestionar los procesos, visualizar resultados en tiempo real y fortalecer la toma de decisiones basadas en datos.
                                </p><br>
                                
                                <div class="row mt-4">
                                    <div class="col-md-6">
                                        <ul class="list-unstyled mb-0">
                                            <li><i class="fas fa-users-cog text-info me-2"></i> Control de accesos por usuario</li>
                                            <li><i class="fas fa-database text-warning me-2"></i> Integración con bases de datos</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <ul class="list-unstyled mb-0">
                                            <li><i class="fas fa-bullseye text-danger me-2"></i> Evaluación de metas y logros</li>
                                            <li><i class="fas fa-chart-pie text-primary me-2"></i> Visualización en Power BI</li>
                                        </ul>
                                    </div>
                                </div><br>

                                <div class="text-center mt-4">
                                    <a href="https://www.mallamaseps.com/QuienesSomos/Index" class="btn btn-outline-success px-4" style="border-radius: 25px;">
                                        <i class="fas fa-info-circle"></i> Conocer más
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- FIN TARJETA DE PRESENTACIÓN -->

                    </div>
                </div>

                <!-- Fila 4 -->
                <div class="row text-left  border rounded">
                    <div class="col-5 border p-2">
                         <img src="static/img/supersaludYSaud.png" alt="SUPERSALUD" style="width: 520px; height: 168px; margin-right: 15px;">
                    </div>
                    <div class="col-3 border p-2">
                        <h4><b><i> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; SIGUENOS </i></b></h4>
                        <ul class="social-buttons" id="social-buttons">
                                <li>
                                    <a href="https://www.youtube.com/channel/UCO1YC3RpnSph2UzqLZg5-GA" target="_blank" class="btn btn-icon btn-neutral btn-youtube btn-round" style="font-size: 24px;" title="Youtube">
                                        <i class="fab fa-youtube" style="font-size: 30px;" id="btnyoutube"></i>&nbsp;&nbsp;<b>YouTube</b>
                                        
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.facebook.com/mallamaseps" target="_blank" class="btn btn-icon btn-neutral btn-facebook btn-round" style="font-size: 24px;" title="Facebook">
                                        <i class="fab fa-facebook-square" style="font-size: 30px;" id="btnfacebook"></i>&nbsp;&nbsp;<b>Facebook</b>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/mallamaseps/" target="_blank" class="btn btn-icon btn-neutral btn-instagram btn-round" style="font-size: 24px;" title="Instagram">
                                        <i class="fab fa-instagram" style="font-size: 30px;" id="btninstagram"></i>&nbsp;&nbsp;<b>Instagram</b>
                                    </a>
                                </li>
                            </ul>
                    </div>
                    <div class="col-4 border p-2">
                         <h4><b><i> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; CONTACTANOS </i></b></h4>
                        <p>
                            <b>Dirección Mallamas: </b> Carrera 1 norte No. 4-56 Avenida Panamericana Ipiales, Nariño<br><br>
                             <b>Líneas de Atención:</b> <br>
                            Línea Nacional: 01 8000 913 701 <br>
                            Celulares: 317 4027290 - 321 8532502
                        </p>
                        </div>
                </div>
            </div>




            
		</div>
        <!--FIN CONTENEDOR PRINCIPAL-->   
	</div>

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
    <script src="static/js/confirmacion.js"></script>
</body>



</html>
