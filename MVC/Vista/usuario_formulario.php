<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi página</title>
</head>

<body>
    <form action="index.php?controlador=usuario&accion=guardar" method="post">
        <table>
            <td><input type="hidden" name="id" value="<?php echo $usuario->id ?>"></td>
            <tr>
                <td for="nombre">Nombre</td>
                <td><input type="text" name="nombre" value="<?php echo $usuario->nombre ?>"></td>
            </tr>
            <tr>
                <td for="apellido">Apellido</td>
                <td><input type="text" name="apellido" value="<?php echo $usuario->apellido ?>"></td>
            </tr>
            <tr>
                <td for="telefono">Teléfono</td>
                <td><input type="text" name="telefono" value="<?php echo $usuario->telefono ?>"></td>
            </tr>
            <tr>
                <td for="edad">Edad</td>
                <td><input type="text" name="edad" value="<?php echo $usuario->edad ?>"></td>
            </tr>
        </table>
        <input type="submit" name="guardar" value="Guardar"></input>
    </form>
</body>

</html>