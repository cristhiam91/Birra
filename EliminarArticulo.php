<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Eliminar Articulo</title>
        <script src="js/jquery/external/jquery/jquery.js" type="text/javascript"></script>
        <script src="js/jquery/jquery-ui.js" type="text/javascript"></script>
        <link href="js/jquery/jquery-ui.css" rel="stylesheet" type="text/css"/>
        <script src="js/Boostrapjs/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/Boostrapjs/bootstrap.bundle.min.js.map" type="text/javascript"></script>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/GeneralStyles.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="card-body" id="cardEliminarUsuario">
            <h3 class="card-title">Eliminar Articulo</h3>
            <form method="post" action="procesos.php">
                <input type="text" name="codigo" placeholder="Codigo" value="">
                <br/>        
                <input type="hidden" name="accion" value="eliminar-articulo">
                <br/>
                <a href="menu-articulos.php"class="btn btn-primary" style="float: left;">Regresar</a>
                <input type="submit" name="btnEliminarArticulo" value="Eliminar" class="btn btn-danger" style="float: right">        
            </form>
        </div>
    </body>
</html>
