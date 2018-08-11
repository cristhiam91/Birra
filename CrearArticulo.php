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
    </head>
    <body>
        <form method="post" action="procesos.php">
            <input type="text" name="codigo" placeholder="Codigo" value=""><br>        
            <input type="text" name="marca" placeholder="Marca" value=""><br>      
            <input type="text" name="detalle" placeholder="Detalles" value=""><br>
            <input type="text" name="precio" placeholder="Precio" value=""><br>      
            <input type="text" name="cantidad" placeholder="Cantidad" value=""><br>
            <input type="text" name="imagen" placeholder="Imagen" value=""><br>
            <input type="hidden" name="accion" value="crear-articulo">
            <input type="submit" name="btnCreaArticulo" value="Crear">  
        </form>
    </body>
</html>
