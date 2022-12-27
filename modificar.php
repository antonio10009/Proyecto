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
        
        $consulta = "SELECT * FROM productos where CODIGOARTICULO = ?";
        $resultado = mysqli_prepare($conexion, $consulta);

        if(!$resultado){
           echo "Error".mysqli_error($conexion);
        }
        $ok = mysqli_stmt_bind_param($resultado, "s", $codigo);
        $ok = mysqli_stmt_execute($resultado);

        if($ok){
            echo "Error";
        }else{
         
        //Acceder a registros.

        $ok = stmt_bind_result($resultado, $r_cod, $r_sec, $r_nom, $r_val, $r_pais);
        echo "<form action ='editar.php' method='POST'>";
        while($fila = mysqli_fetch($resultado)){

            //echo "<tr><td>";
            echo "<input type='hidden' id='cod' name='cod' disabled value=".$r_cod."><br>";
            echo "<input type='text' id='cod2' name='cod2' disabled value=".$r_cod."><br>";
            echo "<input type='text' id='sec' name='sec' value=".$r_sec."><br>";
            echo "<input type='text' id='nom' name='nom' value=".$r_nom."><br>";
            echo "<input type='text' id='val' name='val' value=".$r_val."><br>";
            echo "<input type='text' id='pais' name='pais' value=".$r_pais."><br>";
            echo "<input type='submit' id='enviar' name='enviar' value='Enviar'><br>";

            //echo "</tr>";
        }
        echo "</form>";



        mysqli_stmt_close($resultado);
        
    }
        
        

    
    ?>
    
</body>
</html>