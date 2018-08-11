<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Crear mi cuenta</title>
        <script src="js/jquery/external/jquery/jquery.js" type="text/javascript"></script>      
        <script src="js/Boostrapjs/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/Boostrapjs/bootstrap.bundle.min.js.map" type="text/javascript"></script>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/CrearCuenta.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="container-fluid" id="CrearCuenta">
            <form method="post" action="procesos.php" id="formCrearCuenta">
                <input type="text" name="cedula" placeholder="Cedula" value=""><br>        
                <input type="text" name="nombre" placeholder="Nombre" value=""><br>      
                <input type="text" name="apellidos" placeholder="Apellidos" value=""><br>
                <input type="text" name="telefono" placeholder="Telefono" value=""><br>      
                <input type="text" name="email" placeholder="Email" value=""><br>
                <input type="text" name="nombre_de_usuario" placeholder="Nombre de usuario" value=""><br>
                <input type="password" name="contrasena" placeholder="Contrasena" value=""><br>
                <input type='text' name="rol" value="comun " readonly>
                <br/>
                <br/>
                <input type="hidden" name="accion" value="crear-MiCuenta">
                <input type="submit" name="btnCreaUsuario" value="Crear cuenta" class="btn btn-success">  
                <p><a href="Index.php">Cancelar</a></p><br>
            </form>
        </div>
    </body>
</html>
