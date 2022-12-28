<?php

include("conexion.php");

if(isset($_POST['registrar'])){
    if(strlen($_POST['nombre']) >=1 &&
       strlen($_POST['edad']) >=1 &&
       strlen($_POST['sintoma']) >=1 &&
       strlen($_POST['sala']) >=1){
        $nombre = trim($_POST['nombre']);
        $edad = trim($_POST['edad']);
        $sintoma = trim($_POST['sintoma']);
        $sala = trim($_POST['sala']);
        $fecha_registro = date("d/m/y");
        $consulta = "INSERT INTO pacientes(nombre,edad,sintoma,sala,fecha_registro) VALUES ('$nombre', '$edad', '$sintoma', '$sala', '$fecha_registro')";
        $resultado = mysqli_query($conexion,$consulta);
        if($resultado){
            ?>
            <h3 class="bien">El paciente ha sido registrado con éxito.</h3>
            <?php
        }else{
            ?>
            <h3 class="mal">No se pudo registrar el paciente.</h3>
            <?php
        }
    }else{
        ?>
        <h3 class="mal">Complete los datos necesarios</h3>
        <?php
        }
       } 
?>