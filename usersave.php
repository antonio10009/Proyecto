<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link href="style/estilo14.css" rel="stylesheet" type="text/css">
    <title>Save</title>
</head>
<body>
    
<?php

include("conexion2.php");

   $usu_nombre = $_POST['usu_nombre'];
   $usu_correo = $_POST['usu_correo'];

   $query = "INSERT INTO usuario(usu_nombre, usu_correo) VALUES ('$usu_nombre','$usu_correo')";
   $resultado = $conexion->query($query);

   if($resultado){
       header("Location: lista.php");
   }else{
       echo "Acción no realizada";
   }
   echo '<link href="style/estilo14.css" type="text/css" rel="stylesheet">';


?>

</body>
</html>