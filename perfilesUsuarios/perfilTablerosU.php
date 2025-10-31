<?php
    include '../bd/conexion.php';

    $perfilRequerido = "TablerosU"; // <- único cambio
    include '../php/validar_perfil.php';
?>

<header>
            <nav id="navbar-example2" class="navbar px-3 mb-3 d-flex justify-content-between align-items-center" style="background-color: #038f03ff;">
                <div class="d-flex align-items-center">
                    <a href="../index.php" class="brand-link">
                        <img src="../static/img/CycLogo.png" alt="MLLS LOGO" class="brand-image">
                    </a>
                    <span style="color:white; font-weight:bold; margin-left:15px;">
                        PERFIL RADICACIÓN Y AUDITORIA DE CUENTAS.
                    </span>
                </div>
                <div>
                    <a href="../php/logout.php" class="btn btn-danger btn-sm">
                        <i class="fas fa-sign-out-alt"></i> Cerrar Sesión
                    </a>
                </div>
            </nav>
        </header>