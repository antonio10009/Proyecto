<!DOCTYPE html>
<html lang="es">
<head>
    <?php
        include 'PhPMethods/funciones.php';
        $preguntas=0;
    ?>
    <meta charset="UTF-8">
    <link href="style/estilo.css" type="text/css" rel="stylesheet">
    <title>CliniClab</title>
    <script>
        function redireccionar_admin(){
            location.href="admin.php";
        }
        function abrir_modal(){
            document.getElementById("modal").style.visibility = "visible";
            document.getElementById("modal").style.opacity = 1;
        }
        function cerrar_modal(){
            document.getElementById("modal").style.visibility = "hidden";
            document.getElementById("modal").style.opacity = 0;
        }
        function confirmar_consulta(){
            var elementos = document.getElementsByName("tipo_d");
            largo_elementos = elementos.length;
            for(i=0;i<largo_elementos; i++){
                if(elementos[i].checked){
                    var tipo_d = elementos[i].value;
                }
            }
            var elementos = document.getElementsByName("tipo_e");
            largo_elementos = elementos.length;
            for(i=0;i<largo_elementos; i++){
                if(elementos[i].checked){
                    var tipo_e = elementos[i].value;
                }
            }
            var elementos = document.getElementsByName("frec_c");
            largo_elementos = elementos.length;
            for(i=0;i<largo_elementos; i++){
                if(elementos[i].checked){
                    var frec_c = elementos[i].value;
                }
            }
            var elementos = document.getElementsByName("frec_r");
            largo_elementos = elementos.length;
            for(i=0;i<largo_elementos; i++){
                if(elementos[i].checked){
                    var frec_r = elementos[i].value;
                }
            }
            if(tipo_d != undefined && tipo_e != undefined && frec_c != undefined && frec_r != undefined){
                resultado=tipo_d+":"+tipo_e+":"+frec_c+":"+frec_r;
                window.location.href = "resultado_emergencia.php?consulta="+resultado;
            }else{
                document.getElementById("msg_error").style.visibility = "visible";
            }
            
        }
        function volver(){

        }
        function cerrar(){

        }
    </script>
</head>
<header id="header1">CliniClab</header>
<img id="health" style="width: 200spx;height: 120px;" src="img/cliniclab.png" alt="HP">
<input type="button" id="admin" value="Iniciar como Admin" onclick="redireccionar_admin()">
<body id="bodygeneral">
    <div id="modal" class="modal" >
        <!-- CONTENIDO DE LA SUPER CONSULTA-->
        <div class="contenedor_modal">
            <div class="contenido_modal">
                <header class="header_modal"><h2 class="titulo">Responda las siguientes preguntas<h2><button class="bttn_cerrar" onclick="cerrar_modal()">X</button></header>
                <?php
                    for($preguntas; $preguntas<4;$preguntas++){
                        $resultados = buscar_categorias($preguntas);
                        echo "<div class='pregunta_categoria'>";
                            echo "<header class='Pregunta_contenedor'>";
                            switch($preguntas){
                                case 0:
                                    $tipo="tipo_d";
                                    echo "<p class='tipo_dolor pregunta'> ¿Que tipo de Dolor tiene?</p>";
                                    break;
                                case 1:
                                    $tipo="tipo_e";
                                    echo "<p class='tipo_emergencia pregunta'> ¿Que tipo Emergencia sucedio?</p>";
                                    break;
                                case 2:
                                    $tipo="frec_c";
                                    echo "<p id='frec_cardiaca' class='frec_cardiaca pregunta'>¿Cual es su Frecuencia cardiaca?</p><label class='indicaciones'>*Tome sus pulsos por 60 segundos desde la muñeca o lateral del cuello </label>";
                                    break;
                                case 3:
                                    $tipo="frec_r";
                                    echo "<p id='frec_respiratoria' class='frec_respiratoria pregunta'>¿Cual es su Frecuencia respiratoria?</p><label class='indicaciones'>*acerque cualquiera de sus dedos cerca de la nariz y contar cuantas exhalaciones tiene en 60 segundos </label>";
                                    break;

                            }
                            echo "</header>";
                            echo "<div class='respuestas_contenedor'>";
                        while($fila = mysqli_fetch_row($resultados)){
                            echo "<label class='radio_button'><input type='radio' name='".$tipo."' id='res".strval($fila[0])."' value='".$fila[0]."'>".$fila[1]."</label>";
                        }
                            echo "</div>";
                        echo "</div>";
                    }
                ?>
            </div>
            <footer class="footer_modal"><button id="confirmar" class="bttn_confirmar" onclick="confirmar_consulta()">Confirmar</button><label id="msg_error" for="confirmar">Error Faltan Respuestas</label></footer>
        </div>
    </div>
    <div class="body">
       <p class="eme">¿Tienes una emergencia?</p>
       <input type="button" id="consulta" value="Comenzar Consulta Urgente" onclick= "abrir_modal()">
    </div>
    <div class="body2">
        <p class="attention">Atención!!!</p>
        <p class="disclaimer">Disclaimer: No nos hacemos responsables del uso inadecuado del sistema.</p>
    </div>
    <div class="body3">
        <p class="tratamiento">¿Necesitas Tratamiento?</p>
        <input type="button" id="btntratamiento" value="Buscar Tratamientos" onclick= " location.href='tratamiento.php' ">
    </div>
    <footer class="foot">
        <p class="contact">Información de Contacto: cliniclab@hotmail.com</p>
    </footer>
    <div>
        <input type="button" id="asociados" value="Asociados" onclick= " location.href='asociados.php' ">
        <input type="button" id="donacion" value="Donación" onclick= " location.href='donacion.php' ">
    </div>
</body>
</html>