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
        // si el ususario y contraseña existen lo elimina
        if ($numero_reg) {
            $sql2 = "DELETE FROM usuarios WHERE usuario = '$usuario' and contraseña ='$contrasena' ";
            $resultado2 = mysqli_query($conex,$sql2);
            ?>
            <h3 class="bien">Borrado con exito</h3>
            <?php
        } else {
            ?>
            <h3 class="fallo">Usuario o contraseña invalido, intentelo de nuevo</h3>
            <?php
        }
        
    }
}
?>