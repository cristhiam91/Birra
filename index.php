<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>main</title>
        <script src="js/jquery/external/jquery/jquery.js" type="text/javascript"></script>
        <script src="js/jquery/jquery-ui.js" type="text/javascript"></script>
        <script src="js/Boostrapjs/bootstrap.min.js" type="text/javascript"></script>

        <script src="js/scripts/general.js" type="text/javascript"></script>
        <script src="js/messijs/dist/messi.js" type="text/javascript"></script>
        <link href="js/messijs/dist/messi.css" rel="stylesheet" type="text/css"/>
        <link href="js/messijs/src/animate.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/GeneralStyles.css" rel="stylesheet" type="text/css"/>
        
       
    </head>
    <body>
        <div class="container d-flex justify-content-center" id="contenedorLogin">
            <form id="frmLogin" method="Post">
                <h1>Ingreso al sistema</h1>  
                <div class="form-group">
                    <input type="text" name="cedula" placeholder="Ingrese cedula...">
                </div>
                <div class="form-group">
                    <input type="password" name="contrasena" placeholder="Ingrese contraseña...">            
                </div>
                <div class="form-group">
                    <input  type="button" id="bntIngresar" name="bntIngresar" value="Ingresar" class="bnt btn-success">
                </div>
                <div class="form-group">
                    <p><a href="CrearMiCuenta.php">Crear cuenta</a></p><br>
                </div>
            </form>
        </div>
    </body>
</html>