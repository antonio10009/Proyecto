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

$nombre = $_POST['nombre'];
$calificacion = $_POST['calificacion'];
$categoria = $_POST['categoria'];
$plataforma = $_POST['plataforma'];
$descripcion = $_POST['descripcion'];
$foto = addslashes(file_get_contents($_FILES['foto']['tmp_name']));

$query = "UPDATE datosjuego SET nombre='$nombre', calificacion='$calificacion', categoria='$categoria', plataforma='$plataforma', descripcion='$descripcion', foto='$foto' WHERE nombre = '$nombre'";
$resultado = $conexion->query($query);

if($resultado){
    header("Location: mostrar.php");
}else{
    echo "No se pudo modificar los datos del juego";
}


?>

<a href="mostrar.php">Ir a la sección de listas</a><br>

</body>
</html>