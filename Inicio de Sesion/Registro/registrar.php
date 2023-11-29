<?php 
include("con_db.php");

// al presionar el boton se ejecuta
if (isset($_POST['button'])) {
	// verifica que haya algo escrito en los campos
    if (strlen($_POST['usuario']) >= 1 && strlen($_POST['contrasena']) >= 1) {
		// almacena las entradas por metodo post
		$usuario = trim($_POST['usuario']);
	    $contrasena = trim($_POST['contrasena']);
		// realiza las sentencias sql
		$sql = "SELECT * FROM usuarios WHERE usuario = '$usuario'";
	    $resultado = mysqli_query($conex,$sql);
		$numero_reg = mysqli_num_rows($resultado);
		// verifica si el usuario existe
	    if ($numero_reg) {
			?> 
	    	<h3 class="fallo">Ya existe este usuario</h3>
           <?php
	    // registra al usuario con su contraseña
    }  } else {
		$consulta = "INSERT INTO usuarios(usuario, contraseña) VALUES ('$usuario','$contrasena')";
        $resultado2 = mysqli_query($conex,$consulta);
		// por si hay un error
			if (!$resultado2) {
			?> 
	    		<h3 class="fallo">Algo salio mal</h3>
            <?php
			} else {
			?> 
	    		<h3 class="bien">¡Te has registrado correctamente!</h3>
            <?php
			}
	    	
	    }	
	else {
	    	?> 
	    	<h3 class="fallo">¡Por favor complete los campos!</h3>
           <?php
    }
}
?>