<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link href="style/estilo10.css" rel="stylesheet" type="text/css">
    <link href="js/script15.js">
    <title>Lista</title>
</head>
<body>
    <table id="tabla">
        <thead>
            <tr>
            <th colspan="1"><a href="formulario2.php">Crear nuevo usuario</a></th>
            <th colspan="5">Lista de Usuarios</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>ID</td>
                <td>Nombre</td>
                <td>Correo</td>
                <td>Acción 1</td>
                <td>Acción 2</td> 
            </tr>
            <?php
                include("conexion2.php");

                $query = "SELECT * FROM usuario";
                $resultado = $conexion->query($query);
                while($row = $resultado->fetch_assoc()){
                echo '<link href="style/estilo10.css" type="text/css" rel="stylesheet">';
            ?>

            <tr>
                <td><?php echo $row['usu_codigo']; ?></td>
                <td><?php echo $row['usu_nombre']; ?></td>
                <td><?php echo $row['usu_correo']; ?></td>
                <td><a href="modificar2.php?usu_codigo=<?php echo $row['usu_codigo']; ?>">Cambiar tipo de usuario</a></td>
                <td><a href="eliminaruser.php?usu_codigo=<?php echo $row['usu_codigo']; ?>">Eliminar</a></td>
                <script type="text/javascript">
                    
                function Eliminar(){ 
                if(confirm("¿Esta seguro que desea eliminar el registro?")){
   
                }else{
                window.location.href='lista.php';
            }
       }
  </script>
            </tr>
            <?php
                }
            ?>
        </tbody>
    </table>
    
</body>
</html>