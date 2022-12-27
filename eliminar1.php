<!DOCTYPE html>
<html lang ="es">
    <head>
    <meta charset="UTF-8">
    <title>Datos Modificados</title>
    </head>
     <body>
<?php

include("conexion.php");

$nombre = $_REQUEST['nombre'];

$query = "DELETE FROM datosjuego WHERE nombre = '$nombre'";
$resultado = $conexion->query($query);

if($resultado){
    header("Location: mostrar.php");
}else{
    echo "No se pudo eliminar los datos del juego";
}


?>

<a href="mostrar.php">Ir a la sección de listas</a><br>

</body>
</html>