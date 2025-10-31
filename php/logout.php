<?php
session_start();

// Destruye todas las variables de sesión
$_SESSION = [];

// Borra la cookie de sesión si existe
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// Destruye la sesión
session_destroy();

// Evita volver con el botón atrás
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Pragma: no-cache");

// Redirigir a login
header("Location: ../index.php");
exit;
