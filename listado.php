<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href="estilo/estilo.css" type="text/css" rel="stylesheet">
</head>
<body>

    <?php

        $codigo = $_GET['cod'];

        include 'database.php';
        
        $consulta = "SELECT * FROM productos";
        $resultado = mysqli_query($conexion, $consulta);

        //Acceder a registros.

        echo "<table>";
        while($fila = mysqli_fetch_row($resultado)){

            echo "<tr><td>";
            echo $fila[0]." </td><td>";
            echo $fila[1]." </td><td>";
            echo $fila[2]." </td><td>";
            echo $fila[3]." </td><td>";
            echo $fila[4]." </td>";
            echo "<a href='eliminar.php?='".$fila[0]."'>Eliminar</a></td><td>";
            echo "<a href='modificar.php?='".$fila[0]."'>Editar</a></td>";
            echo "</tr>";
        }
        echo "</table>";

        mysqli_close($conexion)
        

        
        

    
    ?>
    
</body>
</html>