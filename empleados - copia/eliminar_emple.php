<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        contacto
        <input type="tel" name="contacto">

        <input type="submit" value="Eliminar">
    </form>

    <?php
    //isset : es para verificar existe un determinado dato
    if(  isset( $_REQUEST["contacto"] )  ) {

        include '..//conexion%20-%20copia.php';

        //tomo el dato del telefono del formulario
        $contacto = $_REQUEST["contacto"];

        //armo la consulta a mi base de datos por turno que coincida el telefono
        $SQL = "SELECT * FROM empleados WHERE telefono = $contacto LIMIT 1"; 

        //ejecutando la consuta y guardo el resultado en res
        $res = $con->query( $SQL );

        //debug = depurar el codigo
        //var_dump($res);

        if( $res->num_rows == 0){
            echo "<h1>No existe el numero de este telefono</h1>";
        } else {
            //->fetch_assoc() = agarrar un registro y transformarlo en un arreglo
            $registro = $res->fetch_assoc();

            echo "empleados <hr> <br>  
                puesto: $registro[puesto] <br>
                Esta seguro que quiere eliminar esto ? $registro[nombre]
                <a href='?id=$registro[id_entrenador]'>Si</a>
                <a href='formulario_emple.php'>No</a>";
        }
    }

    if(  isset( $_REQUEST["id_entrenador"] )  ) {
        $con = new mysqli("localhost", "root", "", "gimnasio");

        $id = $_REQUEST["id_entrenador"];

        $SQL = "DELETE FROM empleados WHERE id_entrenador = $id";

        $con->query( $SQL );

        header('location: formulario_emple.php');
    }


    ?>
</body>
</html>