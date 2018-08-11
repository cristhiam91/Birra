<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>MiPerfil</title>
        <script src="js/jquery/external/jquery/jquery.js" type="text/javascript"></script>
        <script src="js/jquery/jquery-ui.js" type="text/javascript"></script>
        <link href="js/jquery/jquery-ui.css" rel="stylesheet" type="text/css"/>
        <script src="js/scripts/usuarioMiPerfil.js" type="text/javascript"></script>
        <link href="css/general.css" rel="stylesheet" type="text/css"/>
    </head>
    <body> 
       <?php
        session_start();
         $_SESSION["datos-usuario"]["cedula"];
          ?> 
        <form id="frmBusqueda" method="post">
            <input type="hidden" id="cedulaBusqueda" name="cedulaBusqueda" value="<?php echo $_SESSION["datos-usuario"]["cedula"];?>" placeholder=""/>
            <br/>
            <br/>
            <input type="button" id="btnBuscar" name="btnBuscar" value="Editar mi perfil">
        </form> 
        <div class="frm-MiPerfil">
        
        </div>
    </body>
</html>
