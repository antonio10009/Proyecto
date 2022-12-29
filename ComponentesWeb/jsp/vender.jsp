<%-- 
    Document   : vender
    Created on : 19-05-2021, 10:47:12
    Author     : Antonio
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Vender</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>
    <body>
        <nav class="navbar navbar-expand-sm bg-danger navbar-dark">
            <!-- Brand/logo -->

            <!-- Links -->
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
        <div class="container">          
            <table class="table">
                <thead>
                    <tr>
                        <th>Codigo</th>
                        <th>Nombre</th>
                        <th>Precio</th>
                        <th>Stock</th>
                        <th>Categoria</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Mouse</td>
                        <td>3000</td>
                        <td>18</td>
                        <td>Dispositivo de Entrada</td>
                        <td><a href="detalleventa.jsp"</a><input type="image" name="comprar" src="https://www.regalosparadamas.com/images/compra.png" height="30" weight="30"></td>
                    </tr>
                <tbody>
                    <tr>
                        <td>2</td>
                        <td>Teclado</td>
                        <td>5000</td>
                        <td>25</td>
                        <td>Dispositivo de Entrada</td>
                        <td><a href="detalleventa2.jsp"</a><input type="image" name="comprar" src="https://www.regalosparadamas.com/images/compra.png" height="30" weight="30"></td>
                    </tr>
                </tbody>
                <tbody>
                    <tr>
                        <td>3</td>
                        <td>Pendrive 8GB</td>
                        <td>4000</td>
                        <td>10</td>
                        <td>Almacenamiento</td>
                        <td><a href="detalleventa3.jsp"</a><input type="image" name="comprar" src="https://www.regalosparadamas.com/images/compra.png" height="30" weight="30"></td>
                    </tr>
                </tbody>
                <tbody>
                    <tr>
                        <td>4</td>
                        <td>HDD Externo 500GB</td>
                        <td>50000</td>
                        <td>6</td>
                        <td>Almacenamiento</td>
                        <td><a href="detalleventa4.jsp"</a><input type="image" name="comprar" src="https://www.regalosparadamas.com/images/compra.png" height="30" weight="30"></td>
                    </tr>
                </tbody>
                <tbody>
                    <tr>
                        <td>5</td>
                        <td>Kit de Limpieza</td>
                        <td>3000</td>
                        <td>20</td>
                        <td>Utilidades</td>
                        <td><a href="detalleventa5.jsp"</a><input type="image" name="comprar" src="https://www.regalosparadamas.com/images/compra.png" height="30" weight="30"></td>
                    </tr>
                </tbody>
                <tbody>
                    <tr>
                        <td>6</td>
                        <td>Camara GoPro HD</td>
                        <td>120000</td>
                        <td>23</td>
                        <td>Multimedia</td>
                        <td><a href="detalleventa6.jsp"</a><input type="image" name="comprar" src="https://www.regalosparadamas.com/images/compra.png" height="30" weight="30"></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </body>
</html>
</body>
</html>
