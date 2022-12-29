<?php
    include 'conexion.php';
    //FUNCIONES DE BUSQUEDA (SELECT)
    // PARA SUPER FILTRO LAS FILAS A FILTRAR SON LA 4,5,6,7
    //SOLO SE PUEDE USAR A NIVEL 1
        function super_filtro($cadena){
            $conn = conectar();
            $array = explode(':',$cadena);
            $array_numeros = array();
            for($i = 0; $i<4; $i++){
                $array_numeros[$i]= intval($array[$i]);
                
            }
            //FALTAN DETALLES PARA CAMBIAR ESTA FUNCION
            $consulta = "select * from maniobra where (tipo_dolor = ?) and (tipo_urgencia = ?) and (frec_cardiaca = ?) and (frec_respiratoria = ?)";
            $stmt = $conn->prepare($consulta);
            $stmt ->bind_param('iiii',$array_numeros[0],$array_numeros[1],$array_numeros[2],$array_numeros[3]);
            $stmt ->execute();
            $resultado = $stmt->get_result();
            $num_filas = $resultado -> num_rows;
            switch ($num_filas){
                case 0:
                    return null;
                    break;
                case 1:
                    echo "Hay uno solo";
                    $fila = mysqli_fetch_array($resultado);
                    $cod = strval($fila[0]);
                    header ("Location: detalle.php?codigo=".$cod);
                    break;
            }
            return $resultado;

        }
        //FUNCION PARA BUSCAR LA RUTA DE UNA IMAGEN GUARDADA
        function buscar_imagen($id){
            $conn = conectar();
            $consulta="select * from IMG_LINK where COD = ?";
            $stmt = $conn->prepare($consulta);
            $stmt ->bind_param('s',$id);
            $stmt ->execute();
            $resultado = $stmt->get_result();
            $fila = mysqli_fetch_row($resultado);
            $stmt->close();
            mysqli_close($conn);
            return $fila[1];
        }
        //FUNCION QUE BUSQUE TODOS LOS DATOS DE UNA LISTA DE CATEGORIA
        function buscar_categorias($tipo){
            // 0: tipo_dolor
            // 1: tipo_urgencia
            // 2: frec_cardiaca
            // 3: frec_respiratoria
            $conn = conectar();
            switch($tipo){
                case 0:
                    $consulta = "select * from tipo_dolor";
                    break;
                case 1:
                    $consulta = "select * from tipo_urgencia";
                    break;
                case 2:
                    $consulta = "select * from frec_cardiaca";
                    break;
                case 3:
                    $consulta = "select * from frec_respiratoria";
                    break;
            }
            $resultado = mysqli_query($conn,$consulta);
            return $resultado;
        }
        //FUNCION PARA BUSCAR DATOS DE UNA MANIOBRA PASANDO SU CODIGO
        function buscar_maniobra_dato($cod){
            $conn = conectar();
            $consulta = "select * from MANIOBRA where COD = ?";
            $stmt = $conn->prepare($consulta);
            $stmt ->bind_param('s',$cod);
            $stmt ->execute();
            $resultado = $stmt->get_result();
            $fila = mysqli_fetch_row($resultado);
            $stmt->close();
            mysqli_close($conn);
            return $fila;
        }
        
    
        function buscar_tratamiento($cod){
            $conn = conectar();
            $consulta = "select * from Tratamiento where COD = ?";
            $stmt = $conn->prepare($consulta);
            $stmt ->bind_param('s',$cod);
            $stmt ->execute();
            $resultado = $stmt->get_result();
            $fila = mysqli_fetch_row($resultado);
            $stmt->close();
            mysqli_close($conn);
            return $fila;
        }
        function buscar_f_respiratoria($cod){
            $conn = conectar();
            $consulta = "select * from frec_respiratoria where COD = ?";
            $stmt = $conn->prepare($consulta);
            $stmt ->bind_param('s',$cod);
            $stmt ->execute();
            $resultado = $stmt->get_result();
            $fila = mysqli_fetch_row($resultado);
            $stmt->close();
            mysqli_close($conn);
            return $fila[1];
        }
        function buscar_t_dolor($cod){
            $conn = conectar();
            $consulta = "select * from tipo_dolor where COD = ?";
            $stmt = $conn->prepare($consulta);
            $stmt ->bind_param('s',$cod);
            $stmt ->execute();
            $resultado = $stmt->get_result();
            $fila = mysqli_fetch_row($resultado);
            $stmt->close();
            mysqli_close($conn);
            return $fila[1];
        }
        function buscar_t_urgencia($cod){
            $conn = conectar();
            $consulta = "select * from tipo_urgencia where COD = ?";
            $stmt = $conn->prepare($consulta);
            $stmt ->bind_param('s',$cod);
            $stmt ->execute();
            $resultado = $stmt->get_result();
            $fila = mysqli_fetch_row($resultado);
            $stmt->close();
            mysqli_close($conn);
            return $fila[1];
        }
        function buscar_f_cardiaca($cod){
            $conn = conectar();
            $consulta = "select * from frec_cardiaca where COD = ?";
            $stmt = $conn->prepare($consulta);
            $stmt ->bind_param('s',$cod);
            $stmt ->execute();
            $resultado = $stmt->get_result();
            $fila = mysqli_fetch_row($resultado);
            $stmt->close();
            mysqli_close($conn);
            return $fila[1];
        }
        function comprobar_contrasena($correo, $contrasena){
            $conn = conectar();
            $consulta = "select * from administrador where correo = ?";
            $stmt = $conn->prepare($consulta);
            $stmt ->bind_param('s',$correo);
            $stmt ->execute();
            $resultado = $stmt->get_result();
            $fila = mysqli_fetch_row($resultado);
            if ($fila[2] == $contrasena){
                $stmt->close();
                mysqli_close($conn);
                return true;
            }else{
                $stmt->close();
                mysqli_close($conn);
                return false;
            }
        }
    

    //FUNCIONES PARA AGREGAR (ADD)
        function agregar_maniobra($nombre,$descripcion,$img,$t_dolor,$t_urgencia,$f_respiracion,$f_cardiaca,$conciencia){
            $conn = conectar();
            if($nombre != "" && $descripcion != "" && $img != "" && buscar_t_dolor($t_dolor) != null && buscar_t_urgencia($t_urgencia)!=null && buscar_f_cardiaca($f_cardiaca)!=null && buscar_f_respiratoria($f_respiracion)!=null){
                $add = "insert into MANIOBRA values (0,?,?,?,?,?,?,?,?)";
                $stmt = $conn->prepare($add);
                $stmt ->bind_param('sssiiiis',$nombre,$descripcion,$img,$t_dolor,$t_urgencia,$f_cardiaca,$f_respiracion,$conciencia);
                $stmt ->execute();
                return "Agregado Correctamente";
            }else{
                return "Falta Informacion.";
            }
        }
    //FUNCIONES PARA MODIFICAR (UPDATE)
        function modificar_maniobra($cod,$nombre,$descripcion,$img,$prop,$nuevo_indice,$conciencia){
            $conn = conectar();
            switch($prop){
                case "t_dolor":
                    $update = "update maniobra set tipo_dolor = ?,nombre = ?, descripcion = ?, img = ?, conciencia = ? where codigo = ?";
                    break;
                case "t_urgencia":
                    $update = "update maniobra set tipo_urgencia = ?,nombre = ?, descripcion = ?, img = ?, conciencia = ? where codigo = ?";
                    break;
                case "f_respiratoria":
                    $update = "update maniobra set resp_min = ?,nombre = ?, descripcion = ?, img = ?, conciencia = ? where codigo = ?";
                    break;
                case "f_cardiaca":
                    $update = "update maniobra set frec_cardiaca = ?,nombre = ?, descripcion = ?, img = ?, conciencia = ? where codigo = ?";
                    break;
            }
            $stmt = $conn->prepare($update);
            $stmt ->bind_param('issssi',$nuevo_indice,$nombre,$descripcion,$img,$conciencia,$cod);
            $stmt ->execute();
        }
    
    //FUNCIONES PARA REMOVER (DELETE)

?>