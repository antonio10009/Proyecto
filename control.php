
<?php
$connect = mysqli_query($mysql, $conexion);

/* El query valida si el usuario ingresado existe en la base de datos. Se utiliza la función htmlentities para evitar inyecciones SQL. */
$myusuario = mysqli_query("SELECT usu_codigo from usuario where usu_codigo = '".htmlentities($_POST["nombre"])."'",$connect);
$nmyusuario = mysqli_num_rows($myusuario); 

//Si existe el usuario, validamos también la contraseña ingresada
if($nmyusuario != 0)
{ 
  $sql = "select usu_codigo from usuario where usu_codigo = '".htmlentities($_POST["nombre"])."' and clave = '".md5(htmlentities($_POST["contrasena"]))."'"; 
  $myclave = mysql_query($sql,$connect); 
  $nmyclave = mysql_num_rows($myclave); 
  //Si el usuario y clave ingresado son correctos (y el usuario está activo en la BD), creamos la sesión del mismo. 
  if($nmyclave != 0)
  { 
      session_start();  
      $_SESSION["autentica"] = "sip"; 
      $_SESSION["usuarioactual"] = mysql_result($myclave,0,0); 

      header ("Location: Index 11.php"); 
   }
   else{ 
      echo"<script>alert('La contrase\u00f1a del usuario no es correcta.'); window.location.href=\"index.php\"</script>"; 
   } 
}
else
{ 
    echo"<script>alert('El usuario no existe.'); window.location.href=\"index.php\"</script>"; 
} 
mysql_close($link); 

?>