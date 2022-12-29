<?php

include "funciones.php";

$CORREO = $_POST['CORREO'];
$CONTRASENA = $_POST['CONTRASENA'];
echo $CORREO;
echo $CONTRASENA;
$Validacion=comprobar_contrasena($CORREO, $CONTRASENA);
if($Validacion){
    session_start();
    $_SESSION['CORREO'] = $CORREO;
    header("Location: ../adminhome.php");
}else{
    
}



