<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Buscar Usuario</title>
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
        <div class="card-body" id="cardMenuBusqueda">
            <h3 class="card-title">Buscar usuario</h3>
            <form id="frmBusqueda" method="post">
                <div class="active-cyan-3 active-cyan-4 mb-4">
                    <input class="form-control" type="text" id="cedulaBusqueda" name="cedulaBusqueda" value="" placeholder="Digite la cedula"/>
                </div>      
                <input type="button" id="btnBuscar" name="btnBuscar" value="Buscar" class="btn btn-info" style="float: right;">
                <p><a href="menu-usuarios.php"class="btn btn-primary" style="float: left;">Regresar</a></p><br>

            </form> 
            <div class="frm-actualizar" id="mostarDatosBusqueda">
                
            </div>
            <br/>
        </div>
    </body>
</html>


