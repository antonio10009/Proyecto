onclick="confirmar_eliminar(location='eliminar2.php?id=<?php echo $row['id'];?>')"

  <script type="text/javascript">
   
   function confirmar_eliminar(){ 
   if(confirm("¿Esta seguro que desea eliminar el registro?")){
           
   }else{
    window.location.href='lista.php';
   }
}
  </script>