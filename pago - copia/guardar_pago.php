<?php 
// Incluir la conexión a la base de datos
include '../conexion.php';

// Verificar que los datos existen antes de usarlos
$monto_pago = $_REQUEST["monto_pago"];
$metodo_pago = $_REQUEST["metodo_pago"];

// Consulta de inserción en la tabla pagos
$SQL = "INSERT INTO pago (monto_pago, metodo_pago) VALUES ('$monto_pago', '$metodo_pago')";
$con->close();
?>