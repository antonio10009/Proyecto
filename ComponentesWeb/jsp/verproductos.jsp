<%-- 
    Document   : verproductos
    Created on : 17-05-2021, 15:37:40
    Author     : Antonio
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Productos</title>
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
                    </tr>
                <tbody>
                    <tr>
                        <td>2</td>
                        <td>Teclado</td>
                        <td>5000</td>
                        <td>25</td>
                        <td>Dispositivo de Entrada</td>
                    </tr>
                </tbody>
                <tbody>
                    <tr>
                        <td>3</td>
                        <td>Pendrive 8GB</td>
                        <td>4000</td>
                        <td>10</td>
                        <td>Almacenamiento</td>
                    </tr>
                </tbody>
                <tbody>
                    <tr>
                        <td>4</td>
                        <td>HDD Externo 500GB</td>
                        <td>50000</td>
                        <td>6</td>
                        <td>Almacenamiento</td>
                    </tr>
                </tbody>
                <tbody>
                    <tr>
                        <td>5</td>
                        <td>Kit de Limpieza</td>
                        <td>3000</td>
                        <td>20</td>
                        <td>Utilidades</td>
                    </tr>
                </tbody>
                <tbody>
                    <tr>
                        <td>6</td>
                        <td>Camara GoPro HD</td>
                        <td>120000</td>
                        <td>23</td>
                        <td>Multimedia</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </body>
</html>
</body>
</html>
