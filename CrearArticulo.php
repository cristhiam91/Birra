<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Crear articulo</title>
        <script src="js/jquery/external/jquery/jquery.js" type="text/javascript"></script>
        <script src="js/jquery/jquery-ui.js" type="text/javascript"></script>
        <link href="js/jquery/jquery-ui.css" rel="stylesheet" type="text/css"/>
        <script src="js/Boostrapjs/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/Boostrapjs/bootstrap.bundle.min.js.map" type="text/javascript"></script>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/GeneralStyles.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="container">
            <div class="card-body" id="cardCrearUsuario">
                <h2 class="card-title">Crear Articulo</h2>
                <form method="post" action="procesos.php">
                    <input class="form-control" type="text" name="codigo" placeholder="Codigo" value=""><br>        
                    <input class="form-control" type="text" name="marca" placeholder="Marca" value=""><br>      
                    <input class="form-control" type="text" name="detalle" placeholder="Detalles" value=""><br>
                    <input class="form-control" type="text" name="precio" placeholder="Precio" value=""><br>      
                    <input class="form-control" type="text" name="cantidad" placeholder="Cantidad" value=""><br>
                    <input class="form-control" type="text" name="imagen" placeholder="Imagen" value=""><br>
                    <input type="hidden" name="accion" value="crear-articulo">
                    <a href="menu-articulos.php"class="btn btn-primary" style="float: left;">Regresar</a>
                    <input type="submit" name="btnCreaArticulo" value="Crear" class="btn btn-success" style="float: right">  
                </form>
            </div>
        </div>
    </body>
</html>
