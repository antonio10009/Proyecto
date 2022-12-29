<%-- 
    Document   : detalleventa6
    Created on : 31-05-2021, 12:03:11
    Author     : Antonio
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<%@page import="java.util.List"%>
<%@page import="entidades.Producto"%>
<%
   List<Producto> productos = (List<Producto>)request.getSession().getAttribute("productos");
%>    
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Detalle</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="Estilo.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>
    <body>
        <nav class="navbar navbar-expand-sm bg-danger navbar-dark">
        
            <div class="container-fluid">
                <span class="navbar-brand">ES2 Alumno: Antonio Diaz</span>

                <ul class="navbar-nav" >
                    <li class="nav-item">
                        <a class="nav-link" href="verproductos.jsp">Ver Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="vender.jsp">Venta</a>
                    </li>
                </ul>
            </div>
        </nav>
        <h1>Detalle Venta</h1>
        <div class="text-center" for="Id" id="id">Id: 6 </div>
        <div class="text-center" for="Mouse" id="nombre">Nombre: Camara GoPro HD</label><br>
        <div class="text-center" for="Precio" id="precio">Precio: $120000</label><br> <br>
        <input type="text" placeholder="Cantidad"><br> <br>
        <a href="comprado.jsp"</a><button id="btn" class="btn btn-info" type="button" onclick="comprar">COMPRAR</button>