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
        <input type="hidden" id="cedulaUsuario" name="cedulaUsuario" value="<?php echo $_SESSION["datos-usuario"]["cedula"]; ?>" placeholder=""/>
            <input type="hidden" name="accion" value="listar-MisCompras">
            <input type="submit" name="btnListarCompra" value="Listar">
        </form>

        <?php
        session_start();
        if (isset($_SESSION["lista-compras"])) {
            if (count($_SESSION["lista-compras"]) > 0) {
                foreach ($_SESSION["lista-compras"] as $compra) {
                    echo '<p>Id: ' . $compra["id"] . '</p>';
                    echo '<p>Id usuario: ' . $compra["id_usuario"] . '</p>';
                    echo '<p>Id Articulo: ' . $compra["id_articulo"] . '</p>';
                    echo '<p>Fecha de compra: ' . $compra["fecha_compra"] . '</p>';
                }
            }
        }
        ?>

    </body>
</html>
