<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Empleados</h1>
    <form action="guardar_empleados.php" method="post">
<label for="nombre">nombre del empleado</label>
<input type="text" name="nombre">

<label for="apellido">apellido del empleado</label>
<input type="text" name="apellido"> 

<label for="telefono">contacto del empleado</label>
<input type="tel" name="contacto">

<label for="pusto">Puesto de trabajo</label>
<select name="puesto">
    <option value="Entrenador">Entrenador</option>
    <option value="Administrador">Administrador</option>
    <option value="Mantenimiento">Mantenimiento</option>
    <option value="Recepcion">Recepcion</option>
</select>
<input type="submit" value="guardar">
    </form>
<br>
<a href="eliminar_emple.php">Eliminar empleado</a>
<br>
<a href="modificar_emple.php">Modificar empleado</a>

</body>
</html>