<? include("seguridad.php"); ?> 
<html> 
<head> 
<title>App</title> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
</head> 
<body> <h1>Bienvenido al sistema!</h1> 
<h2>Usuario: <? echo $_SESSION["usuarioactual"] ?> </h2><br> 
<p>Entro correctamente al sistema.</p><br><br> 
<a href="salir.php">Salir</a> 
</body> 
</html>