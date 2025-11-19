<?php
include '../bd/conexion.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo "<script>alert('Acceso inválido'); window.location='../index.php';</script>";
    exit;
}

$codigo   = $_POST['codigo'] ?? '';
$password = $_POST['contraseña'] ?? '';

if ($codigo === '' || $password === '') {
    echo "<script>alert('Debe ingresar usuario y contraseña'); window.location='../index.php';</script>";
    exit;
}

$tablas = [
    'AtencionUsuario'   => ['tabla' => 'AtencionUsuario',   'colCodigo' => 'codigoAtencionUsuario'],
    'Almacen'           => ['tabla' => 'Almacen',           'colCodigo' => 'codigoAlmacen'],
    'Aseguramiento'     => ['tabla' => 'Aseguramiento',     'colCodigo' => 'codigoAseguramiento'],
    'SistemasIntegrados'=> ['tabla' => 'SistemasIntegrados','colCodigo' => 'codigoSistemasIntegrados'],
    'Cartera'           => ['tabla' => 'Cartera',           'colCodigo' => 'codigoCartera'],
    'Comunicaciones'    => ['tabla' => 'Comunicaciones',    'colCodigo' => 'codigoComunicaciones'],
    'Contabilidad'      => ['tabla' => 'Contabilidad',      'colCodigo' => 'codigoContabilidad'],
    'Saos'              => ['tabla' => 'Saos',              'colCodigo' => 'codigoSaos'],
    'Contrataciones'    => ['tabla' => 'Contrataciones',    'colCodigo' => 'codigoContrataciones'],
    'TablerosU'         => ['tabla' => 'TablerosU',         'colCodigo' => 'codigoTablerosU'],
    'Sistemas'          => ['tabla' => 'Sistemas',          'colCodigo' => 'codigoSistemas'],
    'GestionRiesgo'     => ['tabla' => 'GestionRiesgo',     'colCodigo' => 'codigoGestionRiesgo'],
    'Planeacion'        => ['tabla' => 'Planeacion',        'colCodigo' => 'codigoPlaneacion'],
    'RadAudCuentas'     => ['tabla' => 'RadAudCuentas',     'colCodigo' => 'codigoRadAudCuentas'],
    'Recobros'          => ['tabla' => 'Recobros',          'colCodigo' => 'codigoRecobros'],
    'Tesoreria'         => ['tabla' => 'Tesoreria',         'colCodigo' => 'codigoTesoreria'],
];

$usuarioEncontrado = null;
$tablerosPermitidos = [];

// Buscar el usuario en las 16 tablas
foreach ($tablas as $nombreTablero => $info) {

    $sql = "SELECT Cedula, Password 
            FROM {$info['tabla']}
            WHERE {$info['colCodigo']} = ?";

    $stmt = sqlsrv_query($conexion, $sql, [$codigo]);

    if ($stmt && ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC))) {

        // Validar contraseña
        if (!password_verify($password, $row['Password'])) {
            echo "<script>alert('Contraseña incorrecta'); window.location='../index.php';</script>";
            exit;
        }

        $usuarioEncontrado = $row; 
        $tablerosPermitidos[] = $nombreTablero;
    }
}

if (!$usuarioEncontrado) {
    echo "<script>alert('Usuario no encontrado'); window.location='../index.php';</script>";
    exit;
}

// Cargar datos desde Persona
$cedula = $usuarioEncontrado['Cedula'];

$sqlPersona = "SELECT Nombres, Apellidos FROM Persona WHERE Cedula = ?";
$stmtPersona = sqlsrv_query($conexion, $sqlPersona, [$cedula]);
$persona = sqlsrv_fetch_array($stmtPersona, SQLSRV_FETCH_ASSOC);

// Guardar sesión (sin perfil)
$_SESSION['login'] = true;
$_SESSION['cedula'] = $cedula;
$_SESSION['nombre'] = $persona['Nombres'] . " " . $persona['Apellidos'];
$_SESSION['tableros'] = $tablerosPermitidos;

// Redirigir a selección de tablero
header("Location: ../login.php");
exit;

?>
