<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="style/estilo5.css">
    <script src="js/script12.js"></script>
    <link rel="icon web" href="images/Game.png" type="image/x-icon">
    <link href="js/script12.js">
  </head>
  <body>

    <div class="login-box">
      <img src="images/Game Login.png" class="avatar" alt="Avatar Image">
      <h1>Login</h1>
      <form action="login.php" method="POST">
        <!-- Nombre de Usuario -->
        <label for="nombre">Nombre de usuario</label>
        <input type="text" placeholder="Ingrese nombre de usuario" name="nombre" required minlength="4" maxlength="20">
        <!-- Contraseña -->
        <label for="password">Contraseña</label>
        <input type="password" placeholder="Ingrese la contraseña" required>
        <input type="submit" onclick=" location.href='index2.php' " value="Iniciar sesión" name="index2.php">
        <a href="Index 12.php">Olvidaste tu contraseña?</a><br>
        <a href="Index 14.php">Registrarse</a>
      </form>
      <div id='error'></div>
    </div>
  </body>
</html>