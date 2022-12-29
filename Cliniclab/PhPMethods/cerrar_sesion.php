<?php
    session_start();
    $_SESSION['CORREO'] = null;
    session_destroy();
    header ("Location: ../admin.php");
?>