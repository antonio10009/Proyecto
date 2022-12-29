<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include 'PhPMethods/funciones.php';

    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style/estilo_resultado.css" type="text/css" rel="stylesheet">
    <link href="style/estilo.css" type="text/css" rel="stylesheet">
    
    <title>Document</title>
    <script>
        function ver_detalle(cod){
            window.location.href = "detalle.php?codigo="+cod;
        }
        function volver(){
            window.location.href = "index.php";
        }
    </script>
</head>
<body id="bodygeneral">
    <div class="headerResultados">
        <img src="img/cliniclab.png" class="logo">
        <h1 class="titulo"> Resultados de la consulta </h1>
        <button onclick="volver()" class="bttn-volver">Volver</button>
    </div>
    
    <div class="contenedor_resultados">
        <?php

            $cadena = $_GET['consulta'];
            
            $resultado = super_filtro($cadena);
            if($resultado != null){
                while ($fila = mysqli_fetch_row($resultado)){
                    //AQUI S LA ESTRUCTURA DE CADA RULTADO CORRESPONDIENTE
                    echo "<div class='resultado'>";
                    //TITULO DE LA MANIOBRA
                    
                    //DETALLES DE LA MANIOBRA + IMAGEN
                    echo "<div class='contenedor-detalles'>";
                        echo "<h2 class='titulo_maniobra'>".$fila[1]."</h2>";
                        echo "<div class='detalles_maniobra'>";
                        echo "<h5 class= 'detalle'> Detalles: </h5>";
                        echo "<h5 class= 'detalle'>• Tipo de Dolor:".buscar_t_dolor($fila[4])."</h5>";
                        echo "<h5 class= 'detalle'>• Tipo de Urgencia:".buscar_t_urgencia($fila[5])."</h5>";
                        echo "<h5 class= 'detalle'>• Frecuencia Respiratoria:".buscar_f_respiratoria($fila[6])."</h5>";
                        echo "<h5 class= 'detalle'>• Frecuencia Cardiaca".buscar_f_cardiaca($fila[7])."</h5>";
                        echo "</div>";
                    echo "</div>";
                    //BOTTON PARA VEL EL DETALLE
                    echo "<footer class='pie-resultado'>";
                    echo "<button class='bttn-detalle' onclick='ver_detalle(".strval($fila[0]).")'>Ver Detalle</button>";
                    echo "</footer>";
                    echo "</div>";
                }
            }else{
                //AQUI EN CASO DE QUE NO ENCUENTRE NINGUNO
                echo"<h1 class='aviso'>No se encontraron resultados</h1>";
            }
            
            
        ?>
    </div>
    
</body>
</html>