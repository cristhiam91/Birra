<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Listar Compras</title>
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
                <input type="hidden" name="accion" value="listar-compra">
                <input  class="btn btn-success" type="submit" name="btnListarCompra" value="Listar">    
               
                <p><a href="menu-compras.php"class="btn btn-primary" style="float: left;">Regresar</a></p><br>

            </form>

            <?php
            session_start();
            if (isset($_SESSION["lista-compras"])) {
                if (count($_SESSION["lista-compras"]) > 0) {
                    echo '<div class="table-responsive">';
                    echo '<table class="table table-warning">';
                    foreach ($_SESSION["lista-compras"] as $compra) {
                        echo '<thead>';
                        echo '<tr>';
                        echo '<th>Id</th>';
                        echo '<th>usuario</th>';
                        echo '<th>Articulo</th>';
                        echo '<th>Numero de factura</th>';
                        echo '<th>Fecha de compra</th>';
                        echo '</tr>';
                        echo '<tr>';
                        echo '<tbody>';
                        echo '</thead>';
                        echo '<tr>';
                        echo '<td>' . $compra["id"] . '</td>';
                        echo '<td>' . $compra["id_usuario"] . '</td>';
                        echo '<td>' . $compra["id_articulo"] . '</td>';
                        echo '<td>' . $compra["numero_factura"] . '</td>';
                        echo '<td>' . $compra["fecha_compra"] . '</td>';
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
