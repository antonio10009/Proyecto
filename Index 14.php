<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registro</title>
    <link rel="stylesheet" href="style/estilo8.css">
    <link rel="icon web" href="images/Game.png" type="image/x-icon">
  </head>
  <body>
    <div class="login-box">
        <img src="images/Newuser.png" class="avatar" alt="Avatar Image">
        <h1>Registrar cuenta</h1>
        <form>
          <!-- Registro de cuenta -->
          <label for="username">Nombre de usuario</label>
          <input type="text" placeholder="Ingrese nombre de usuario" name="nombre" id="username" required minlength="4" maxlength="20">
          <label for="nombre">Nombre</label>
          <input type="nombre" placeholder="Ingrese su nombre" required>
          <label for="apellido">Apellido</label>
          <input type="apellido" placeholder="Ingrese su apellido" required>
          <label for="email">Correo Electrónico</label>
          <input type="email" placeholder="Ingrese su correo" required>
          <label for="password">Contraseña</label>
          <input type="password" placeholder="Ingrese la contraseña" required>
          <input type="submit" onclick=" location.href='Index 15.php' " value="Registrar" name="Index 15.php">
          <input type="button" id="volver" value="Volver" onclick= " location.href='index.php'">      

    </form>
  </body>
</html>