<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include 'PhPMethods/funciones.php';
        $codigo = $_GET['codigo'];
        $datos = buscar_maniobra_dato($codigo);
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style/estilo.css" type="text/css" rel="stylesheet">
    <link href="style/estilo_detalle.css" type="text/css" rel="stylesheet">
    <title>Document</title>
    <script>
        function volver(){
            window.location.href = "index.php";
        }
    </script>
</head>
<body id="bodygeneral">
    <div class="headerResultados">
        <img src="img/cliniclab.png" class="logo">
        <?php
            echo "<h1 class='titulo'>".$datos[1]."</h1>";
        ?>
        <button onclick="volver()" class="bttn-volver">Volver</button>
    </div>
    <div class="contenedor-detalle">
        <?php
            //AQUI IRIAN LOS DATOS EN DETALLE DE CADA MANIOBRA
            echo "<img src='".buscar_imagen($datos[3])."' class='imagen-maniobra'>";
            echo "<h1 class='titulo'>".$datos[1]."</h1>";
            echo "<p class='descripcion-maniobra'>".$datos[2]."</p>";
            echo "<footer class='pie-resultado'><button class='bttn-volver' onclick='volver()'>Volver Inicio</button></footer>";
        ?>
    </div>
    
    
</body>
</html>