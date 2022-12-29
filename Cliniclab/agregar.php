<!DOCTYPE html>
<html lang="es">
    <?php
        require 'PhPMethods/control_sesion.php';
    ?>
<head>
    <meta charset="UTF-8">
    <link href="style/estilo9.css" type="text/css" rel="stylesheet">
    <title>Agregar Tratamientos</title>
    <link href="Scripts/script1.js">
</head>
<body>
    <form action="save.php" method="POST" enctype="multipart/form">
    <h3>Agregue el tratamiento que desea</h3>
      <input type="text" required class="nombre" name="nombre" style="left: 60px;" placeholder="Ingrese el nombre" value=""><br>
      <input type="text" required class="descripcion" name="descripcion" style="height: 60px; left: 60px;" placeholder="Ingrese la descripción" maxlength="250"><br>
      <div class="custom-input-file col-md-6 col-sm-6 col-xs-6">
      <input type="file" class="input-file" id="file" required name="img" value="" accept=".JPG, .PNG, .JPEG">
      Agregar foto
      </div>

      <div id="preview"></div>
      <input type="submit" class="agregar" id="agregart" value="Agregar" onclick=" location.href='resultado.php' ">
      <!--Cuando se carga la vista previa de la imagen, el botón de volver se queda fuera del cuadro quedando abajo-->
      <a href="adminhome.php" class="volver">Volver</a>
</form>
<script src="Scripts/script1.js"></script>
</body>
</html>