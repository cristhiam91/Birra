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
            <input type="text" name="id" placeholder="Id Compra" value=""><br>        
            <input type="hidden" name="accion" value="eliminar-compra">
            <input type="submit" name="btnEliminarCompra" value="Eliminar">        
        </form>
    </body>
</html>
