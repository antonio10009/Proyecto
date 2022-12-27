<!DOCTYPE html>
<html lang="es">
    <head>
    <meta charset="UTF-8">
    <link href="style/estilo4.css" type="text/css" rel="stylesheet">
    <link rel="icon web" href="images/Game.png" type="image/x-icon">
    <link href="js/script11.js">
        <title>Ingrese los datos</title>
    </head>
        <body>
        <?php
                include("conexion.php");

                $nombre = $_REQUEST['nombre'];

                $query = "SELECT * FROM datosjuego WHERE nombre ='$nombre'";
                $resultado = $conexion->query($query);
                $row = $resultado->fetch_assoc();

        ?>
                <form action="proceso_modificar.php?nombre=<?php echo $row['nombre']; ?>" method="POST" enctype="multipart/form-data">
                <fieldset>Ingrese los datos del juego</fieldset>
                    <input type="text" required class="nombre" id="nombre" name="nombre" placeholder="Ingrese el nombre" value="<?php echo $row['nombre']; ?>"><br/>
                    <input type="text" required class="calificacion" id="calificacion" name="calificacion" placeholder="Ingrese una calificación: Ej(E,T,M,A)" value="<?php echo $row['calificacion']; ?>"><br>
                    <select class="cater1" required name="categoria" value="<?php echo $row['categoria']; ?>">
                      <option id="null1">Seleccione una categoría</option>
                      <option id="ave">Aventura</option>
                      <option id="dis">Disparos</option>
                      <option id="Rol">Rol</option>
                      <option id="sim">Simulación</option>
                      <option id="ter">Terror</option>
                      <option id="dep">Deportes</option>
                      <option id="gue">Guerra</option>
                      <option id="jdm">Juegos de mesa</option>
                      <option id="mus">Música</option>
                      <option id="sup">Supervivencia</option>  
                      <option id="gor">Gore</option>
                      <option id="pel">Pelea</option>
                      <option id="rlk">Roguelike</option>
                    </select>
                    <input id="btnAgregar" type="button" value="Agregar" />
        <fieldset id="divAgregar">
        </fieldset>
            <script>
                var btnElem = document.getElementById('btnAgregar');
                var index = -1;
                btnElem.onclick = function(evt) {
                index++;
                var divAgreg = document.getElementById('divAgregar');
                divAgreg.innerHTML = divAgreg.innerHTML 
                + '<select class="cater2"><option id="null2">Seleccione una categoria</option><option id="ave">Aventura</option><option id="dis">Disparos</option><option id="Rol">Rol</option><option id="sim">Simulacion</option><option id="ter">Terror</option><option id="dep">Deportes</option><option id="gue">Guerra</option><option id="jdm">Juegos de mesa</option><option id="mus">Música</option><option id="sup">Supervivencia</option><option id="gor">Gore</option><option id="rlk">Roguelike</option></select><input type="button" id="btnEliminar" value="Eliminar">';
                }

            </script>
              <script>
                var btnElem = document.getElementById('btnEliminar');
                function removeOptions(selectElement) {
                var i, L = selectElement.options.length - 1;
                for(i = L; i >= 0; i--) {
                selectElement.remove(i);
   }
}
        removeOptions(document.getElementById('DropList'));
        </script>
        <!--Hasta aqui llega-->



        <br>
        <select id="plataforma" required name="plataforma" value="<?php echo $row['plataforma']; ?>">
            <option id="null3">Seleccione la plataforma</option>
            <option id="sw">Nintendo Switch</option>
            <option id="pl">PlayStation</option>
            <option id="xb">Xbox</option>
            <option id="PC">PC</option>
        </select>
        <input type="text" id="descripcion" required class="descripcion" name="descripcion" placeholder="Ingrese una descripción" value="<?php echo $row['descripcion']; ?>" maxlength="250"><br>
        <div class="custom-input-file col-md-6 col-sm-6 col-xs-6">
        <img height="70px" src="data:image/jpg;base64,<?php echo base64_encode($row['foto']); ?>"/>
            <input type="file" id="file" required name="foto" class="input-file" value="" accept=".JPG, .PNG, .JPEG">
            Seleccionar foto
            </div>
            
        <div id="preview"></div>
        <input type="submit" id="enviar" value="Enviar" onclick=" location.href='proceso_modificar.php' " class="envio">
        <a href="index.php" id="cerrar">Cerrar sesión</a>
    </form>

    <script src="js/script11.js"></script>
                </form>
        </body>
</html>