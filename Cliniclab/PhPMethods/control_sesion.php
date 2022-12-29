<?php
    session_start();
    if(!isset($_SESSION['CORREO'])){
        header ("location: admin.php");
    }

?>