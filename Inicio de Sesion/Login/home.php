<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar contraseña</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <form method="post">
        <section class="form-login">
            <h5>Bienvenido :3</h5>
            <p></p>
<?php
            
require "con_db.php";
mysqli_set_charset($conex,'utf8');



$consulta_sql="SELECT * FROM usuarios";


$resultado = $conex->query($consulta_sql);


$count = mysqli_num_rows($resultado); 
 
echo "<table border='2' >
    <tr>
        <th>Usuario</th>
        <th>Contraseña</th>
    
    </tr>";

if ( $count>0 ){

    while( $row = mysqli_fetch_assoc($resultado)  ){
     echo "<tr>";
     echo"<td>". $row['usuario'] ."</td>";
     echo"<td>". $row['contraseña'] ."</td>";
     echo "</tr>";
     
    }
    echo "</table>";

}else{
    
    
    echo"<h1 style='color:red' >Sin Ningun registro</h1>";
    }
    ?>        
            <p><a href="index.php">Cerrar Sesion</a></p>
            </section>
    </form>
    
</body>
</html>