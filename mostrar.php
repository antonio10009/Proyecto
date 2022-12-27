<!DOCTYPE html>
<html lang="es">
    <head>
    <title>Mostrar Fotos</title>
    <link href="style/estilo6.css" rel="stylesheet" type="text/css">
    <link href="js/script13.js">
    <meta charset="UTF-8">

    </head>
    <body>
        <table>
            <thead>
                <tr>
                    <th id="create" colspan="10"><a href="index2.php">Crear Nuevo Juego</a></th>
                </tr>
                <tr id="tr1">
                    <th id="nom">Nombre</th>
                    <th id="cal">Calificación</th>
                    <th id="cat">Categoría</th>
                    <th id="pla">Plataforma</th>
                    <th id="des">Descripción</th>
                    <th id="take">Foto</th>
                    <th id="acc1">Acción 1</th>
                    <th id="acc2">Acción 2</th>
                </tr>
            </thead>
            <tbody>
                <?php

                echo "<link rel='stylesheet' type='text/css' href='style/estilo6.css'>";

                include("conexion.php");

                $query = "SELECT * FROM datosjuego";
                $resultado = $conexion->query($query);
                while($row = $resultado->fetch_assoc()){
                  ?>
                    <tr>
                        <td id="nomo"><?php echo $row['nombre']; ?></td>
                        <td id="calo"><?php echo $row['calificacion']; ?></td>
                        <td id="cato"><?php echo $row['categoria']; ?></td>
                        <td id="plao"><?php echo $row['plataforma']; ?></td>
                        <td id="deso"><?php echo $row['descripcion']; ?></td>
                        <td id="takeo"><img height="70px" src="data:image/jpg;base64,<?php echo base64_encode($row['foto']); ?>"/></td>
                        <th id="mod"><a href="modificar1.php?nombre=<?php echo $row['nombre']; ?>">Modificar</a></th>
                        <th id="eli"><a href="eliminar1.php?nombre=<?php echo $row['nombre']; ?>">Eliminar</a></th>

                    </tr>
                    <?php  
                }
            
                ?>
            </tbody>
        </table>

        <script src="js/script13.js"></script>
    </body>
</html>