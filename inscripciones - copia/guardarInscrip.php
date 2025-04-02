<?php 
//conexion a bd
include '../conexion.php';

//recibimos los datos del formulario
$fecha = $_REQUEST["fecha"];
$telefono= $_REQUEST["telefono"];

//consulta de busqueda en el turno con la misma fecha y hora
$SQL = "SELECT * FROM inscripcion
        WHERE fecha = '$fecha' ";

//ejecutar la consulta
$res = $con->query( $SQL );

//num_rows sirve para saber la cantidad de resgistros encontrados
if( $res->num_rows > 0){
    echo "<h1>Ese turno ya fue tomado</h1>";
}else {
    //consulta de insercion
    $SQL = "INSERT INTO inscripcion (fecha,telefono) 
                VALUES ( '$fecha','$telefono')";

    //ejecutar la consulta
    $con->query( $SQL );
    
}