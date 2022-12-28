<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="style/estilo1.css">
        <title>Registro de Pacientes</title>
    </head>
    <body>
        <img src="img/logoclinica.png" style="width: 100px; height: 100px; position: relative; left: 630px; top: 30px;">
        <h1 style="color: #017B43; position: relative; text-align: center; top: 40px; font-family: 'Bree Serif', serif;">Registro de Pacientes</h1>
       <form method="post">
        <input type="text" name="nombre" placeholder="Nombre Completo">
        <input type="text" name="edad" placeholder="Edad">
        <input type="text" name="sintoma" placeholder="Síntoma">
        <input type="text" name="sala" placeholder="Sala">
        <input type="submit" name="registrar" value="Registrar">
        <a href="inicio.html" id="volver1">Volver</a>
       </form>
       <?php
       include("registro.php")
       ?> 
    </body>
</html>