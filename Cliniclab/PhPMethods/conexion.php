<?php
   
function conectar(){
    $host='localhost';
    $username='root';
    $password='';
    $database='cliniclab';
    $conn=mysqli_connect($host,$username,$password);
    if (mysqli_connect_errno()){
        echo "Fallo al conectar";
        exit();
    }
     //Validar la BD
     mysqli_select_db($conn, $database) or die("No se encuentra la DataBase");
     //Seleccionar conjunto de caracteres a utilizar.
     mysqli_set_charset($conn,"utf8");
     return $conn; 
}
    ?>
    