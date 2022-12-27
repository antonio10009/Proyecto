<? 
@session_start(); 
if($_SESSION["autentica"] != "sip")
{ 
  header("Location: index.php"); 
  exit(); 
} 
?>