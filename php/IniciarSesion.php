<?php
include '../bd/conexion.php';
session_start();

// Evitar caché del navegador
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

// 🔹 Mapeo de ID → perfil
$mapaTableros = [
    1  => 'AtencionUsuario',
    2  => 'Almacen',
    3  => 'Aseguramiento',
    4  => 'SistemasIntegrados',
    5  => 'Cartera',
    6  => 'Comunicaciones',
    7  => 'Contabilidad',
    8  => 'Saos',
    9  => 'Contrataciones',
    10 => 'TablerosU',
    11 => 'Sistemas',
    12 => 'GestionRiesgo',
    13 => 'Planeacion',
    14 => 'RadAudCuentas',
    15 => 'Recobros',
    16 => 'Tesoreria'
];

// Verificar que llegó el id
$idTablero = $_GET['id'] ?? null;

if ($_SERVER['REQUEST_METHOD'] === 'POST' && $idTablero && isset($mapaTableros[$idTablero])) {
    $codigo   = $_POST['codigo'] ?? '';
    $password = $_POST['contraseña'] ?? '';

    $perfil    = $mapaTableros[$idTablero];
    $tablas    = [
        'AtencionUsuario'   => ['tabla' => 'AtencionUsuario',   'colCodigo' => 'CodigoAtencionUsuario'],
        'Almacen'           => ['tabla' => 'Almacen',           'colCodigo' => 'CodigoAlmacen'],
        'Aseguramiento'     => ['tabla' => 'Aseguramiento',     'colCodigo' => 'CodigoAseguramiento'],
        'SistemasIntegrados'=> ['tabla' => 'SistemasIntegrados','colCodigo' => 'CodigoSistemasIntegrados'],
        'Cartera'           => ['tabla' => 'Cartera',           'colCodigo' => 'CodigoCartera'],
        'Comunicaciones'    => ['tabla' => 'Comunicaciones',    'colCodigo' => 'CodigoComunicaciones'],
        'Contabilidad'      => ['tabla' => 'Contabilidad',      'colCodigo' => 'CodigoContabilidad'],
        'Saos'              => ['tabla' => 'Saos',              'colCodigo' => 'CodigoSaos'],
        'Contrataciones'    => ['tabla' => 'Contrataciones',    'colCodigo' => 'CodigoContrataciones'],
        'TablerosU'         => ['tabla' => 'TablerosU',         'colCodigo' => 'CodigoTablerosU'],
        'Sistemas'          => ['tabla' => 'Sistemas',          'colCodigo' => 'CodigoSistemas'],
        'GestionRiesgo'     => ['tabla' => 'GestionRiesgo',     'colCodigo' => 'CodigoGestionRiesgo'],
        'Planeacion'        => ['tabla' => 'Planeacion',        'colCodigo' => 'CodigoPlaneacion'],
        'RadAudCuentas'     => ['tabla' => 'RadAudCuentas',     'colCodigo' => 'CodigoRadAudCuentas'],
        'Recobros'          => ['tabla' => 'Recobros',          'colCodigo' => 'CodigoRecobros'],
        'Tesoreria'         => ['tabla' => 'Tesoreria',         'colCodigo' => 'CodigoTesoreria'],
    ];

    $tabla     = $tablas[$perfil]['tabla'];
    $colCodigo = $tablas[$perfil]['colCodigo'];

    // 🔹 Buscar usuario solo en la tabla correspondiente
    $sql = "SELECT u.Password, p.Nombres, p.Apellidos, u.Cedula
            FROM $tabla u
            INNER JOIN Persona p ON u.Cedula = p.Cedula
            WHERE u.$colCodigo = ?";
    $params = [$codigo];
    $stmt   = sqlsrv_query($conexion, $sql, $params);

    if ($stmt && $row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
        if (password_verify($password, $row['Password'])) {
            // ✅ Credenciales correctas
            $_SESSION['login']  = true;
            $_SESSION['perfil'] = $perfil;
            $_SESSION['nombre'] = $row['Nombres'] . " " . $row['Apellidos'];

            header("Location: ../perfilesUsuarios/perfil$perfil.php");
            exit;
        } else {
            echo "<script>alert(' Contraseña incorrecta');window.location.href='../login.php?id=$idTablero';</script>";
            exit;
        }
    } else {
        //  Usuario no existe en este tablero
        echo "<script>alert(' Usuario no inscrito en este tablero');window.location.href='../login.php?id=$idTablero';</script>";
        exit;
    }

} else {
    // Si no viene id válido o acceso incorrecto
    echo "<script>alert('Acceso inválido');window.location.href='../index.php';</script>";
    exit;
}
