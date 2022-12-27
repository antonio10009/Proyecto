<!DOCTYPE html>
<html lang ="es">
    <head>
    <meta charset="UTF-8">
    <title>Datos Añadidos</title>
    </head>
     <body>
<?php

include("conexion.php");

`ID_JUGADOR` int(11) NOT NULL,
  `NUMERO_JUGADOR` int(11) NOT NULL,
  `NOMBRE_JUGADOR` varchar(20) NOT NULL,
  `APELLIDO_JUGADOR` varchar(30) NOT NULL,
  `EDAD_JUGADOR` int(11) NOT NULL,
  `FK_EQUIPO` int(11) DEFAULT NULL,
  `FK_POSICION` int(11) DEFAULT NULL

$id = $_POST['ID_JUGADOR'];
$numero = $_POST['NUMERO_JUGADOR'];
$nombre = $_POST['NOMBRE_JUGADOR'];
$apellido = $_POST['APELLIDO_JUGADOR'];
$edad = $_POST['EDAD_JUGADOR'];
$equipo = $_POST['FK_EQUIPO'];
$posicion = $_POST['FK_POSICION'];


$query = "INSERT INTO jugador(ID_JUGADOR, NUMERO_JUGADOR, NOMBRE_JUGADOR, APELLIDO_JUGADOR, EDAD_JUGADOR, FK_EQUIPO, FK_POSICION) VALUES ('$id','$numero','$nombre','$apellido','$edad','$equipo','$posicion')";
$resultado = $conexion->query($query);

if($resultado){
    header("Location: mostrar.php");
}else{
    echo "No se pudo insertar";
}


?>

<a href="mostrar.php">Ir a la sección de listas</a><br>

</body>
</html>