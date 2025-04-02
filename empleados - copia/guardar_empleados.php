<?php 
//conexion a bd
include '..//conexion.php';


//recibimos los datos del formulario
$nombre = $_REQUEST["nombre"];
$apellido = $_REQUEST["apellido"];
$telefono = $_REQUEST["telefono"];
$puesto = $_REQUEST["puesto"];

//consulta de busqueda en el turno con la misma fecha y hora

//ejecutar la consulta
$SQL = "INSERT INTO empleados (nombre, apellido, telefono, puesto) VALUES ('$nombre', '$apellido', $telefono , '$puesto')";
$res = $con->query( $SQL );

//num_rows sirve para saber la cantidad de resgistros encontrados
//if( $res->num_rows > 0){
 //   echo "<h1>Ese turno ya fue tomado</h1>";
//}else {
    //consulta de insercion
  //  $SQL = "INSERT INTO empleados (nombre, apellido, telefono, puesto) 
    //            VALUES ('$nombre', '$apellido', $telefono , '$puesto')";

    ////ejecutar la consulta
    $con->query( $SQL );
    
