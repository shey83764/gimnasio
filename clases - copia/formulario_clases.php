<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Reserva tu turno para el gimnasio</h1>

    <form action="guardar_clases.php" method="post">
        <label for="cupo_max">Cupo maximo</label>
        <input type="number" name="cupo_max">

        <label for="fecha"> Fecha</label>
        <input type="date" name="fecha" id='fecha'>
        

        <label for="contacto">Contacto</label>
        <input type="tel" name="telefono">
        <label for="hora">Hora</label>
        
        <select name="hora">
            <?php
                for($i=8; $i<=21 ; $i++){
                    echo "<option>$i:00</option>";
                }
            ?>        
        </select>
        

        <input type="submit" value="Reservar">

    </form>
    <br>

    <a href="eliminar.php">Eliminar turno</a> 
    <br>
    <a href="modificar.php">Modificar turno</a>

    <h1 id="h1"></h1>
    <script src="index.js"></script>
</body>
</html>