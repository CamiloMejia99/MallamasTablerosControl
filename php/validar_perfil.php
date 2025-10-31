<?php
include 'validar_sesion_be.php';

// Esta variable debe estar definida ANTES de incluir este archivo
if (!isset($_SESSION['perfil']) || $_SESSION['perfil'] !== $perfilRequerido) {
    header("Location: ../index.php");
    exit;
}