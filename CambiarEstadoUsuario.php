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
            <input type="text" name="Cedula" placeholder="Cedula" value=""><br>        
            <select name="Estado">    
                <option value="0">Seleccione</option>
                <option value="1">Activo </option>
                <option value="0">Inactivo </option>
            </select><br>
            <input type="hidden" name="accion" value="estado-usuario">
            <input type="submit" name="btnEstadoUsuario" value="CambiarEstado">        
        </form>
    </body>
</html>
