<!DOCTYPE html>
<html lang="es">
<head>
    <?php
        require 'PhPMethods/control_sesion.php';
    ?>
    <meta charset="UTF-8">
    <link href="style/estilo11.css" type="text/css" rel="stylesheet">
    <link href="Scripts/script2.js">
    <title>Mostrar</title>
</head>
<body>
   <table>
    <thead>
        <tr>
            <th id="crear" colspan="10"><a href="agregar.php">Crear otro tratamiento</a></th>
        </tr>
        <tr id="tr1">
            <th id="nom">Nombre</th>
            <th id="des">Descripción</th>
            <th id="foto">Foto</th>
            <th id="acc1">Acción 1</th>
            <th id="acc2">Acción 2</th>
        </tr>
    </thead>
</tbody>
    <?php

    echo "<link rel='stylesheet' type='text/css' href='style/estilo11.css'>";

    include "PhPMethods/conexion.php";

    $query = "SELECT * FROM tratamiento";
    $conexion = conectar();
    $resultado = $conexion->query($query);
    while($row = $resultado->fetch_assoc()){
        ?>
          <tr>
            <td id="nomo"><?php echo $row['nombre']; ?></td>
            <td id="deso"><?php echo $row['descripcion']; ?></td>
            <td id="photo"><img height="70px" src="data:image/jpg;base64,<?php echo base64_encode($row['foto']); ?>"/></td>
            <th id="mod"><a href="modificartra.php?nombre=<?php echo $row['nombre']; ?>">Modificar</a></th>
            <th id="eli"><a href="eliminartra.php?nombre=<?php echo $row['nombre']; ?>">Eliminar</a></th>
            <a href="adminhome.php" id="volver">Volver</a>

    </tr>
    <?php
    }
    ?>
    </tbody>
    </table>
<script src="Scripts/script2.js"></script>
</body>
</html>