<!DOCTYPE html>
<html lang ="es">
    <head>
    <meta charset="UTF-8">
    <title>Datos Añadidos</title>
    </head>
     <body>

<?php

$host = 'localhost';
$username = 'root';
$password = '';
$database = 'formulario';

$conexion = mysqli_connect($host, $username, $password, $database);

   if($conexion){
   }else{
       echo "Conexión no exitosa";
   }

   

?>




</body>
</html>