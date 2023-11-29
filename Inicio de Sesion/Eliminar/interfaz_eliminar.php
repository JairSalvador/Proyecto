<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- interfaz -->
    <form method="post">
        <section class="form-login">
            <h5>Eliminar cuenta</h5>
            <input class="controls" type="text" name="usuario" value="" placeholder="Usuario">
            <input class="controls" type="password" name="contrasena" value="" placeholder="Contraseña">
            <input class="button" type="submit" value="Eliminar" name="boton">
            <p> <a href="index.php">Inicia sesion.</a></p>
    </form>
     <?php
        include("con_db.php");
        include("eliminar.php");
    ?>
    
</body>
</html>