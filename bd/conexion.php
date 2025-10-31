<?php
$serverName = "ESTADISTICA01"; 
$connectionOptions = [
    "Database" => "MallamasAdmin",
    "TrustServerCertificate" => true
];

$conexion = sqlsrv_connect($serverName, $connectionOptions);

if ($conexion === false) {
    // Manejar error sin imprimir espacios
    error_log(print_r(sqlsrv_errors(), true));
    die("Error en la conexión a la base de datos.");
}



// $serverName = "CAMILO\\SQLEXPRESS"; 
// $connectionOptions = [
//     "Database" => "MallamasAdmin",
//     "TrustServerCertificate" => true
// ];

// $conexion = sqlsrv_connect($serverName, $connectionOptions);

// if ($conexion === false) {
//     // Manejar error sin imprimir espacios
//     error_log(print_r(sqlsrv_errors(), true));
//     die("Error en la conexión a la base de datos.");
// }


?>