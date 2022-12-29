<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link href="style/estilo5.css" type="text/css" rel="stylesheet">
    <title>CliniClab</title>
</head>
<form class="formulario" action="https://formsubmit.co/antonio.diaz02@inacapmail.cl" enctype="multipart/form-data" method="POST">
<header id="header1">CliniClab</header>
<img id="health" style="width: 200spx;height: 120px;" src="../Taller de integración/img/cliniclab.png" alt="HP">
<body id="bodygeneral">
    <div class="body">
       <p class="don">Donación</p>
       <p class="des">Ayude a nuestra organización para mejorar la gestión médica y el servicio del sistema, nosotros actualizaremos y mejoraremos las funciones para entregar más soluciones médicas.</p>
       <p class="dat">Ingrese los datos:</p>
       <input type="nombre" style="width: 220px;height: 20px;" id="nombre" name="name" placeholder="Ingrese su nombre" required><br>
       <br>
       <input type="apellido" style="width: 220px;height: 20px;" id="apellido" name="apellido" placeholder="Ingrese su apellido" required><br>
       <br>
       <input type="email" style="width: 220px;height: 20px;" id="email" name="email" placeholder="Ingrese su correo" required><br>
       <br>
       <input type="phone" style="width: 220px;height: 20px;" id="telefono" name="telefono" placeholder="Ingrese su número" required>
       <input type="submit" class="donate" value="Enviar">
       <button type="button" id="volver" class="atras" onclick= " location.href='Index.php' ">Volver</button>
       </div>
       <div>
        <footer class="foot">
            <p class="contact">Información de Contacto: cliniclab@hotmail.com</p>
        </footer>
       </div>