<?php

    $host = 'localhost';
    $username = 'root';
    $password = '';
    $database = '041_dbsimple';


    //Generar conexion
    $conexion = mysqli_connect($host, $username, $password);

    if(mysqli_connect_errno()){
        echo "Error en conexión con el servidor";
        exit();
    }

      //Validar existencia de database

      mysqli_select_db($conexion, $database) or die("Error al conectar database");
      mysqli_set_charset($conexion, "utf8");

?>