<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>

    <body>
        <?php
        session_start();
        $_SESSION["datos-usuario"]["cedula"];
        ?> 
        <form method="post" action="procesos.php">
            <input type="hidden" name="Filtro" value="<?php echo $_SESSION["datos-usuario"]["cedula"];?>">
            <input type="hidden" name="accion" value="listar-MisCompras">
            <input type="submit" name="btnListarCompra" value="Listar">      

<!--             <input type="text" id="compraBusquedaFactura" name="compraBusquedaFactura" value="" placeholder="Digite el id de la factura"/>
<input type="button" id="btnBuscar" name="btnBuscar" value="Buscar">-->
        </form>

        <?php
        if (isset($_SESSION["lista-compras"])) {
            if (count($_SESSION["lista-compras"]) > 0) {
                foreach ($_SESSION["lista-compras"] as $compra) {
                    echo '<p>Id: ' . $compra["id"] . '</p>';
                    echo '<p>Id usuario: ' . $compra["id_usuario"] . '</p>';
                    echo '<p>Id Articulo: ' . $compra["id_articulo"] . '</p>';
                    echo '<p>Numero de factura: ' . $compra["numero_factura"] . '</p>';
                    echo '<p>Fecha de compra: ' . $compra["fecha_compra"] . '</p>';
                }
            }
        }
        ?>

    </body>
</html>

