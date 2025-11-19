<?php
    // 1. Validar sesión primero (si no ha iniciado sesión → fuera)
    include '../php/validar_sesion_be.php';

    // 2. Validar si el usuario pertenece al tablero
    $tableroRequerido = "Comunicaciones";   // ← Cambia según el tablero
    include '../php/validar_tablero.php';
    // Incluir menú lateral
    include '../php/menu_lateral.php';
?>


        <header>
            <!--INICIO BOTON BACK-->    
                    <a href="../login.php" class="btn"   style="width: 70px; height: 50px; border-color: transparent;">
                        <img style="width:70px; height:50px;" class="card-img-top" src="../static/img/flechaIzquierda.png" alt="Regresar Menu" >
                    </a>
                <!--FIN BOTON BACK--> 
            <nav id="navbar-example2" class="navbar px-3 mb-3 d-flex justify-content-between align-items-center" style="background-color: #038f03ff;">
                <div class="d-flex align-items-center">
                    <a href="../index.php" class="brand-link">
                        <img src="../static/img/CycLogo.png" alt="MLLS LOGO" class="brand-image">
                    </a>
                    <span style="color:white; font-weight:bold; margin-left:15px;">
                        PERFIL COMUNICACIONES.
                    </span>
                </div>
                <div>
                    <a href="../php/logout.php" class="btn btn-danger btn-sm">
                        <i class="fas fa-sign-out-alt"></i> Cerrar Sesión
                    </a>
                </div>
            </nav>
        </header>