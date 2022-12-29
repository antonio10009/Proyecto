<!DOCTYPE html>
<html lang ="es">
    <head>
    <?php
        require 'PhPMethods/control_sesion.php';
    ?>
    <meta charset="UTF-8">
    <title>Guardado</title>
    </head>
     <body>
<?php

include "PhPMethods/conexion.php";
$conexion = conectar();
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$img = '1'; //addslashes(file_get_contents($_FILES['img']['tmp_name']));

$query = "INSERT INTO tratamiento(nombre, descripcion, img) VALUES ('$nombre', '$descripcion', '$img')";
$resultado = $conexion->query($query);

if($resultado){
    header("Location: resultado.php");
}else{
    echo "No se pudo agregar";
}

?>

<a href="mostrar.php">Ver listas de tratamientos</a><br>

</body>
</html>