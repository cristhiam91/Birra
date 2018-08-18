<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Listar Articulos</title>
        <script src="js/jquery/external/jquery/jquery.js" type="text/javascript"></script>
        <script src="js/jquery/jquery-ui.js" type="text/javascript"></script>
        <link href="js/jquery/jquery-ui.css" rel="stylesheet" type="text/css"/>
        <script src="js/Boostrapjs/bootstrap.min.js" type="text/javascript"></script>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/GeneralStyles.css" rel="stylesheet" type="text/css"/>
    </head>

    <body>
        <div class="container">
            <form method="post" action="procesos.php">  
                <input type="hidden" name="accion" value="listar-articulos">
                <input class="btn btn-success" type="submit" name="btnListarArticulo" value="Listar"> 
                <p><a href="menu-articulos.php"class="btn btn-primary" style="float: left;">Regresar</a></p><br>
            </form>

            <?php
            session_start();
            if (isset($_SESSION["lista-articulos"])) {
                if (count($_SESSION["lista-articulos"]) > 0) {
                    echo '<div class="table-responsive">';
                    echo '<table class="table table-warning">';
                    foreach ($_SESSION["lista-articulos"] as $articulo) {
                        echo '<thead>';
                        echo '<tr>';
                        echo '<th>Codigo</th>';
                        echo '<th>Marca</th>';
                        echo '<th>Detalle</th>';
                        echo '<th>Precio</th>';
                        echo '<th>Cantidad</th>';
                        echo '<th>Imagen</th>';
                        echo '</tr>';
                        echo '<tr>';
                        echo '<tbody>';
                        echo '</thead>';
                        echo '<tr>';
                        echo '<td>' . $articulo["codigo"] . '</td>';
                        echo '<td>' . $articulo["marca"] . '</td>';
                        echo '<td>' . $articulo["detalle"] . '</td>';
                        echo '<td>' . $articulo["precio"] . '</td>';
                        echo '<td>' . $articulo["cantidad"] . '</td>';
                        echo '<td>' . $articulo["imagen"] . '</td>';
                        echo '</tr>';
                        echo '</tbody>';
                    }
                    echo" </table>";
                    echo '</div">';
                }
            }
            ?>
        </div>
    </body>
</html>
