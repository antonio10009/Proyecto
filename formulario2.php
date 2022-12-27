<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link href="style/estilo11.css" rel="stylesheet" type="text/css">
    <title>Save</title>
    
    <?php
    echo '<link href="style/estilo11.css" type="text/css" rel="stylesheet">';
    ?>
</head>
<body>
    <form action="usersave.php" method="POST"><br><br>
        <input type="text" required name="usu_nombre" placeholder="Ingrese el nombre" value=""><br><br>
        <input type="text" required name="usu_correo" placeholder="Ingrese el correo" value=""><br><br>
        <input type="submit" value="Aceptar">
</form>
</body>
</html>