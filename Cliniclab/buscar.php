<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style/estilo13.css">
    <title>Buscar Tratamentos</title>
    <?php
        require 'PhPMethods/control_sesion.php';
    ?>
</head>
<body>
    <form action="resultab.php" method="POST" enctype="multipart/form">
    <h3>Buscar Tratamentos disponibles</h3>
    <input type="search" name="buscador" id="buscador" placeholder="Quitar dolor de cabeza, calambres, etc..."><br><br>
    <input type="submit" id="buscar" value="Buscar">
    <a href="adminhome.php" id="volver">Volver</a>
    </form>
</body>
</html>