<!DOCTYPE html>
<html lang="es">
<head>
    <?php 
        require 'PhPMethods/control_sesion.php';
    ?>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style/estilo8.css">
    <title>Bienvenido Admin!</title>
<script>
    function cerrar_sesion(){
        window.location.href = "PhPMethods/cerrar_sesion.php";
    }
</script>
</head>
<body>
    <div class="menu">
        <header style="margin-top:-25px;" id="header1">CliniClab</header>
        <img id="health" src="img/cliniclab.png" alt="HP">
        <h1 style="margin-top:-25px;">Seleccione una opción</h1><br>
    </div>
    <div class="opciones">
        <button type="button" class="button1" onclick= " location.href='buscar.php' ">Buscar Tratamientos</button>
        <button type="button" class="button2" onclick= " location.href='agregar.php' ">Agregar Tratamiento</button>
    </div>
    <div class="close">
        <button type="button" class="cerrar" onclick= "cerrar_sesion()">Cerrar sesión</button>
    </div>
</body>
</html>