<?php
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    // Bloquear acceso si no ha iniciado sesión
    if (!isset($_SESSION['login']) || $_SESSION['login'] !== true) {
        header("Location: /MallamasTablerosControl/index.php");
        exit;
    }

    // Evitar caché
    header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
    header("Pragma: no-cache");
?>
