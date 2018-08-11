<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Crear usuario</title>
        <script src="js/jquery/external/jquery/jquery.js" type="text/javascript"></script>
        <script src="js/jquery/jquery-ui.js" type="text/javascript"></script>
        <link href="js/jquery/jquery-ui.css" rel="stylesheet" type="text/css"/>
        <script src="js/scripts/usuariosBusqueda.js" type="text/javascript"></script>
        <script src="js/Boostrapjs/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/Boostrapjs/bootstrap.bundle.min.js.map" type="text/javascript"></script>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/GeneralStyles.css" rel="stylesheet" type="text/css"/>

    </head>
    <body>
        <div class="card-body" id="cardCrearUsuario">
            <h2 class="card-title">Crear usuario</h2>
            <form method="post" action="procesos.php">
                <input class="form-control" type="text" name="cedula" placeholder="Cedula" value=""><br>        
                <input class="form-control" type="text" name="nombre" placeholder="Nombre" value=""><br>      
                <input class="form-control" type="text" name="apellidos" placeholder="Apellidos" value=""><br>
                <input class="form-control" type="text" name="telefono" placeholder="Telefono" value=""><br>      
                <input class="form-control" type="text" name="email" placeholder="Email" value=""><br>
                <input class="form-control" type="text" name="nombre_de_usuario" placeholder="Nombre de usuario" value=""><br>
                <input class="form-control" type="password" name="contrasena" placeholder="Contrasena" value=""><br>
                <select class="form-control" name="rol">    
                    <option value="0">Seleccione</option>
                    <option value="admin">Administrador </option>
                    <option value="comun">Usurio comun </option>
                </select><br>
                <input type="hidden" name="accion" value="crear-usuario">
                <a href="menu-usuarios.php"class="btn btn-primary" style="float: left;">Regresar</a>
                <input type="submit" name="btnCreaUsuario" value="Crear" class="btn btn-success" style="float: right">  
            </form>
        </div>
    </body>
</html>
