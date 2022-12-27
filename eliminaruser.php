<?php

include("conexion2.php");

   $usu_codigo = $_REQUEST['usu_codigo'];

   $query = "DELETE FROM usuario WHERE usu_codigo='$usu_codigo'";
   $resultado = $conexion->query($query);

   if($resultado){
       header("Location: lista.php");
   }else{
       echo "Acción no realizada";
   }

?>