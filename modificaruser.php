<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link href="style/estilo12.css" rel="stylesheet" type="text/css">
    <title>Save</title>
</head>
<body>

<?php

include("conexion2.php");

   $usu_codigo = $_REQUEST['usu_codigo'];
   $usu_nombre = $_POST['usu_nombre'];
   $usu_correo = $_POST['usu_correo'];

   $query = "UPDATE usuario SET usu_nombre='$usu_nombre', usu_correo='$usu_correo' WHERE usu_codigo='$usu_codigo'";
   $resultado = $conexion->query($query);

   if($resultado){
       header("Location: lista.php");
   }else{
       echo "Acción no realizada";
   }

?>

</body>
</html>