<html>
    <head>
        <meta charset="UTF-8">
        <title>Actualiza Usuario</title>
        <script src="js/jquery/external/jquery/jquery.js" type="text/javascript"></script>
        <script src="js/jquery/jquery-ui.js" type="text/javascript"></script>
        <link href="js/jquery/jquery-ui.css" rel="stylesheet" type="text/css"/>
        <script src="js/scripts/usuarios.js" type="text/javascript"></script>
        <link href="css/general.css" rel="stylesheet" type="text/css"/>
        <script src="js/Boostrapjs/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/Boostrapjs/bootstrap.bundle.min.js.map" type="text/javascript"></script>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/GeneralStyles.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="card-body" id="cardEliminarUsuario">
            <h3 class="card-title">Actualizar usuario</h3>
            <br/>
            <form id="frmBusqueda" method="post">
                <input type="text" id="cedulaBusqueda" name="cedulaBusqueda" value="" placeholder="Digite la cedula"/>
                <br/>    
                <br/>
                <input type="button" id="btnBuscar" name="btnBuscar" value="Buscar" class="bnt btn-info" style="float: right">
                  <br/>
            </form> 
            <div class="frm-actualizar" id="frmEliminarUsuario">
            </div>
        </div>
    </body>
</html>
