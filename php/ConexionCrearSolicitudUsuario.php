<?php
include '../bd/conexion.php';

// 🔹 Recibir datos del formulario
$cedula         = $_POST["cedula"];
$nombre         = $_POST["nombre"];
$apellidos      = $_POST["apellidos"];
$correo         = $_POST["correo"];
$telefono       = $_POST["telefono"];
$direccion      = $_POST["direccion"];
$ciudad         = $_POST["ciudad"];
$cargo          = $_POST["cargo"];
$justificacion  = $_POST["justificacion"];
$tablerosSeleccionados = isset($_POST["tableros"]) ? $_POST["tableros"] : [];

// 🔹 Validar que haya tableros seleccionados
if (empty($tablerosSeleccionados)) {
    echo '<script>alert("Debe seleccionar al menos un tablero para la solicitud.");window.location.href="../SolicitudesRegistro.php"</script>';
    exit;
}

// 🔹 Verificar si ya existe una solicitud con esa cédula
$consulta = "SELECT Cedula FROM SolicitudRegistro WHERE Cedula = ?";
$stmt = sqlsrv_query($conexion, $consulta, [$cedula]);
$existe = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC);

if ($existe) {
    echo '<script>alert("Ya existe una solicitud registrada con esa cédula.");window.location.href="../SolicitudesRegistro.php"</script>';
    exit;
}

// 🔹 Fecha actual
$fechaSolicitud = date("Y-m-d H:i:s");

// 🔹 Iniciar transacción
sqlsrv_begin_transaction($conexion);

try {
    // 1️⃣ Insertar la solicitud principal
    $sql = "INSERT INTO SolicitudRegistro
            (Cedula, Nombres, Apellidos, Correo, Telefono, Direccion, Ciudad, Cargo, FechaSolicitud, Justificacion)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $params = [$cedula, $nombre, $apellidos, $correo, $telefono, $direccion, $ciudad, $cargo, $fechaSolicitud, $justificacion];
    $ok = sqlsrv_query($conexion, $sql, $params);

    if (!$ok) {
        throw new Exception("Error al insertar la solicitud: " . print_r(sqlsrv_errors(), true));
    }

    // 2️⃣ Insertar los tableros seleccionados (relación Cedula ↔ IdTablero)
    foreach ($tablerosSeleccionados as $idTablero) {
        $sqlTab = "INSERT INTO SolicitudRegistroTableros (Cedula, IdTablero) VALUES (?, ?)";
        $paramsTab = [$cedula, $idTablero];
        $okTab = sqlsrv_query($conexion, $sqlTab, $paramsTab);

        if (!$okTab) {
            throw new Exception("Error al registrar tablero solicitado: " . print_r(sqlsrv_errors(), true));
        }
    }

    // ✅ Confirmar transacción
    sqlsrv_commit($conexion);
    echo '<script>alert("✅ Solicitud enviada exitosamente. Será revisada por el administrador.");window.location.href="../login.php"</script>';

} catch (Exception $e) {
    sqlsrv_rollback($conexion);
    echo "❌ Error en el registro:<br>" . $e->getMessage();
}

sqlsrv_close($conexion);
?>
