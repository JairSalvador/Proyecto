<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesion en la cuenta</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <form method="post">
        <section class="form-login">
            <h5>Iniciar sesión</h5>
            <input class="controls" type="text" name="usuario" value="" placeholder="Usuario">
            <input class="controls" type="password" name="contrasena" value="" placeholder="Contraseña">
            <input class="button" type="submit" value="Ingresar" name="boton">
            <p><a href="#">¿Olvidaste tu Contraseña?</a></p>
            <p>¿No tienes cuenta? <a href="registro.html">Registrate.</a></p>
        </section>
    </form>
    <?php
        include("con_db.php");
        
    ?>
</body>
</html>