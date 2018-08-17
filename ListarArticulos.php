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
        <form method="post" action="procesos.php">

            <select name="Filtro">
                <option value="2">Todos</option>
                <option value="admin">admin </option>
                <option value="comun">comun </option>
            </select><br>
            <input type="hidden" name="accion" value="listar-articulos">
            <input type="submit" name="btnListarArticulo" value="Listar">
        </form>

        <?php
        if (isset($_SESSION["lista-articulos"])) {
            if (count($_SESSION["lista-articulos"]) > 0) {
                foreach ($_SESSION["lista-articulos"] as $articulo) {
                    echo '<p>Codigo: ' . $usuario["codigo"] . '</p>';
                    echo '<p>Marca: ' . $usuario["marca"] . '</p>';
                    echo '<p>Detalle: ' . $usuario["detalle"] . '</p>';
                    echo '<p>Precio: ' . $usuario["precio"] . '</p>';
                    echo '<p>Cantidad: ' . $usuario["cantidad"] . '</p>';
                    echo '<p>Imagen: ' . $usuario["imagen"] . '</p>';
                }
            }
        }
        ?>

    </body>
</html>
