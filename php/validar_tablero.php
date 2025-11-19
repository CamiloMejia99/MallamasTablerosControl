<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Si no hay login → fuera
if (!isset($_SESSION['login']) || $_SESSION['login'] !== true) {
    header("Location: ../index.php");
    exit;
}

// El archivo que lo incluye debe definir esto:
if (!isset($tableroRequerido)) {
    die("Error: Falta definir \$tableroRequerido en este módulo.");
}

// Validar si el usuario tiene acceso a este tablero
if (!in_array($tableroRequerido, $_SESSION['tableros'])) {
    echo "<script>alert('No tiene permisos para acceder a este tablero'); window.location='../login.php';</script>";
    exit;
}
