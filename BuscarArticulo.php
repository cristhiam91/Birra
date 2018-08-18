<html>
    <head>
        <meta charset="UTF-8">
        <title>Buscar Articulo</title>    
        <script src="js/jquery/external/jquery/jquery.js" type="text/javascript"></script>
        <script src="js/jquery/jquery-ui.js" type="text/javascript"></script>
        <link href="js/jquery/jquery-ui.css" rel="stylesheet" type="text/css"/>
        <script src="js/scripts/articulosBusqueda.js" type="text/javascript"></script>
        <link href="css/general.css" rel="stylesheet" type="text/css"/>
        <script src="js/Boostrapjs/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/Boostrapjs/bootstrap.bundle.min.js.map" type="text/javascript"></script>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../Birra/css/GeneralStyles.css" rel="stylesheet" type="text/css"/>


    </head>
    <body>
        <div class="container">
            <div class="card-body" id="cardMenuBusqueda">
                <h3 class="card-title">Buscar Articulo</h3>
                <form id="frmBusqueda" method="post" >
                    <div class="active-cyan-3 active-cyan-4 mb-4">
                        <input type="text" id="articuloBusqueda" name="articuloBusqueda" value="" placeholder="Digite el codigo"/>
                    </div>
                    <input type="button" id="btnBuscar" name="btnBuscar" value="Buscar"class="btn btn-info" style="float: right;">
                    <p><a href="menu-articulos.php"class="btn btn-primary" style="float: left;">Regresar</a></p><br>
                </form> 
                <div class="frm-actualizar" id="mostarArticulosBusqueda">

                </div>
            </div>
        </div>
    </body>
</html>
