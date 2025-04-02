<?php 
//conexion a bd
include '../conexion.php';

//recibimos los datos del formulario
$hora = $_REQUEST["hora"];
$cupo_max = $_REQUEST["cupo_max"];
$telefono = $_REQUEST["telefono"];
$fecha = $_REQUEST["fecha"];

//consulta de busqueda en el turno con la misma fecha y hora
$SQL = "SELECT * FROM clases WHERE fecha = '$fecha' AND hora=$hora ";

//ejecutar la consulta
//$res = $con->query( $SQL );

//num_rows sirve para saber la cantidad de resgistros encontrados
//if( $res->num_rows > 0){
  //  echo "<h1>Ese turno ya fue tomado</h1>";
//}else {
    //consulta de insercion
    $SQL = "INSERT INTO clases (hora, cupo_,max, telefono, fecha) VALUES ('$hora', '$cupo_max', $telefono , '$fecha')";

    //ejecutar la consulta
    $con->query( $SQL );
    
