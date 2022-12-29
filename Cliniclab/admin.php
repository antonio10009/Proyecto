<!DOCTYPE html>
<html lang="es">
  <head>
    <?php 
      
      include "PhPMethods/funciones.php"
    
    ?>
    <meta charset="utf-8">
    <title>Admin</title>
    <link rel="stylesheet" href="style/estilo6.css">
    <link rel="stylesheet" href="style/estilo7.css">
  </head>
  <body>
    <div class="login-menu">
        <header style="margin-top:-25px;" id="header1">CliniClab</header>
        <img id="health" src="img/cliniclab.png" alt="HP">
        <h1 style="margin-top:-25px;">Iniciar sesión</h1><br>
        <form action="PhPMethods/validacionadmin.php" method="POST">
        <!-- Correo Electrónico -->
        <label for="nombre">Correo</label>
        <input type="text" placeholder="Ingrese su correo" id="CORREO" name="CORREO" required>
        <!-- Contraseña -->
        <label for="password">Contraseña</label>
        <input type="password" name="CONTRASENA" id="CONTRASENA" placeholder="Ingrese la contraseña" required>
        <input type="submit" value="Iniciar sesión">
        <button type="button" id="volver" class="atras" onclick= " location.href='Index.php' ">Volver</button>
      </form>
      <div id='error'></div>
    </div>
  </body>
</html>