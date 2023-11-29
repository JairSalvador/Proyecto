<?php
include("con_db.php");

// verifica que el boton haya sido presionado
if (isset($_POST['boton'])) {
    // revisa si hay algun caracter en las entradas
    if (strlen($_POST['usuario']) >= 1 && strlen($_POST['contrasena']) >= 1) {
        // almacena en variables los valores del usuario
        $usuario = trim($_POST['usuario']);
	    $contrasena = trim($_POST['contrasena']);
        $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' and contraseña ='$contrasena' ";
        $resultado = mysqli_query($conex,$sql);
        $numero_reg = mysqli_num_rows($resultado);
        // si el usuario y contrasseña existen los redirecciona a home
        if ($numero_reg != 0) {
            ?>
            <meta http-equiv="refresh" content=".5; URL=home.php">
            <p><a href="home.php"></a>.</p>
            <?php
        } else {
            ?>
            <h3 class="fallo">Usuario o contraseña invalido, intentelo de nuevo</h3>
            <?php
        }
        
    } else {
	    	?>
	    	<h3 class="fallo">¡Por favor complete todos los campos!</h3>
           <?php
    }

}
?>
