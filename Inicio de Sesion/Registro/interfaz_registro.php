<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar cuenta</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <!-- interfaz -->
    <form method="post">
        <section class="form-login">
        <h5>Registrar cuenta</h5>
        <input class="controls" type="text" name="usuario" value="" placeholder="Usuario">
        <input class="controls" type="password" name="contrasena" value="" placeholder="Contraseña">
        <input class="button" type="submit" value="Registrar" name="boton">
        <p>¿Ya tienes cuenta? <a href="index.php">Inicia sesion.</a></p>
        </section>
    </form>
        <!-- señalar las variables al archivo .php -->
        <?php
        incluide("registrar.php");
        ?>
</body>
</html>