<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="resultado.php" method="GET">
    <fieldset><legend>Buscar Registro</legend>
        <input type="text" id="cod" name="cod" placeholder="Código"><br>
        <input type="submit" name="enviar" id="enviar" value="Enviar"><br>
</fieldset>

<form action="eliminar.php" method="GET">
    <fieldset><legend>Eliminar Registro</legend>
        <input type="text" id="cod" name="cod" placeholder="Código"><br>
        <input type="submit" name="enviar" id="enviar" value="Enviar"><br>
</fieldset>

<form action="editar.php" method="POST">
    <fieldset><legend>Editar Registro</legend>
        <input type="text" id="cod" name="cod" placeholder="Código"><br>
        <input type="text" id="sec" name="sec" placeholder="Sección"><br>
        <input type="text" id="nom" name="nom" placeholder="Nombre"><br>
        <input type="text" id="val" name="val" placeholder="Valor"><br>
        <input type="text" id="pais" name="pais" placeholder="País"><br>
        <input type="submit" name="enviar" id="enviar" value="Enviar"><br>
</fieldset>
<form action="modificar.php" method="GET">
    <fieldset><legend>Modificar Registro</legend>
        <input type="text" id="cod" name="cod" placeholder="Código"><br>
        <input type="submit" name="enviar" id="enviar" value="Enviar"><br>
</fieldset>
</form>
</body>
</html>