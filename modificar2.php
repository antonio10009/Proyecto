<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link href="style/estilo13.css" rel="stylesheet" type="text/css">
    <title>Save</title>
</head>
<body>
<?php

    $usu_codigo = $_REQUEST['usu_codigo'];

                include("conexion2.php");

                $query = "SELECT * FROM usuario WHERE usu_codigo = '$usu_codigo'";
                $resultado = $conexion->query($query);
                $row = $resultado->fetch_assoc();

            

            ?>

    <form action="modificaruser.php?usu_codigo=<?php echo $row['usu_codigo']; ?>" method="POST"><br><br>
    
        <input type="text" required name="usu_nombre" placeholder="Ingrese el nombre" value="<?php echo $row['usu_nombre']; ?>"><br><br>
        <input type="text" required name="usu_correo" placeholder="Ingrese el correo" value="<?php echo $row['usu_correo']; ?>"><br><br>
        <input type="submit" value="Aceptar">
</form>
</body>
</html>