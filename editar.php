<?php

$codigo = $_POST['cod'];
$sec = $_POST['sec'];
$nom = $_POST['nom'];
$val = $_POST['val'];
$pais = $_POST['pais'];


include 'database.php';

$consulta = "UPDATE producto set SECCION = ?, NOMBREARTICULO = ?, VALOR = ?, PAISDEORIGEN = ? WHERE = CODIGOARTICULO = ?";
$resultado = mysqli_prepare($conexion, $consulta);

if(!$resultado){
    echo "Error al eliminar: ".mysqli_error($conexion);
}

$ok = mysqli_stmt_bind_param($resultado,"sssss", $sec, $nom, $val, $pais, $cod);
$ok = mysqli_stmt_execute($resultado);

if(!$ok){
    echo "Error al modificar";
}else{
    header('Location: listado.php');
}

mysqli_close($conexion)






?>
