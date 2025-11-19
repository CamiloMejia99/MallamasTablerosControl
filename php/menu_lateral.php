<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$tableros = $_SESSION['tableros'] ?? [];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../assets/images/icon.jpg">
    <link rel="stylesheet" type="text/css" href="../static/css/style.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
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
    <link
        href="https://fonts.googleapis.com/css2?family=Fuzzy+Bubbles:wght@700&family=Source+Serif+Pro:ital,wght@1,600&display=swap"
        rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
        integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk"
        crossorigin="anonymous"></script>
    <script type="text/javascript" src="../static/js/bootstrap.min.js"></script>

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

<!----------------------------------------BARRA LATERAL DE OPCIONES ----------------------------------------------------->
        <aside class="main-sidebar sidebar-dark-info elevation-4">
            <a href="../login.php" class="brand-link">
                <img src="../static/img/logoCuadros.png" alt="MLLS LOGO" class="brand-image img-circle elevation-3">
                <span class="brand-text font-weight-light">MALLAMAS</span>
            </a>

            <div class="sidebar">

                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">

                        <?php foreach ($tableros as $t): ?>
                            <li class="nav-item">
                                <a href="../perfilesUsuarios/perfil<?= $t ?>.php" class="nav-link">
                                    <i class="nav-icon fas fa-file"></i>
                                    <?= $t ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </nav>
            </div>
        </aside>
        <!--------------------------------------------------------------------------------------------->
