<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Listar usuarios</title>
    </head>
    <script src="js/jquery/external/jquery/jquery.js" type="text/javascript"></script>
    <script src="js/jquery/jquery-ui.js" type="text/javascript"></script>
    <link href="js/jquery/jquery-ui.css" rel="stylesheet" type="text/css"/>
    <script src="js/scripts/usuariosBusqueda.js" type="text/javascript"></script>
    <script src="js/Boostrapjs/bootstrap.min.js" type="text/javascript"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="css/GeneralStyles.css" rel="stylesheet" type="text/css"/>

    <body>
        <div class="table-responsive"></div>
        <form method="post" action="procesos.php">
            <!--
                        <select name="Filtro">    
                            <option value="2">Todos</option>
                            <option value="admin">admin </option>
                            <option value="comun">comun </option>
                        </select><br>
                        <input type="hidden" name="accion" value="listar-usuario">
                        <input type="submit" name="btnListarUsuario" value="Listar">        -->
        </form>
        <?php
        session_start();
        if (isset($_SESSION["lista-usuarios"])) {
            if (count($_SESSION["lista-usuarios"]) > 0) {
                foreach ($_SESSION["lista-usuarios"] as $usuario) {
                    echo '<div class="table-responsive">';
                    echo '<table class="table table-dark">';
                    echo '<thead>';
                    echo '<tr>';
                    echo '<th>Cedula</th>';
                    echo '<th>Nombre</th>';
                    echo '<th>Contraseña</th>';
                    echo '<th>Rol</th>';
                    echo '</tr>';
                    echo '<tr>';
                    echo '<tbody>';
                    echo '</thead>';
                    echo '<tr>';
                    echo '<td>'.$usuario["cedula"].'</td>';
                    echo '<td>'.$usuario["nombre"].'</td>';
                    echo '<td>'.$usuario["contrasena"].'</td>';
                    echo '<td>'.$usuario["rol"]. '</td>';
                    echo '</tr>';
                    echo '</tbody>';
                    echo" </table>";
                   echo '</div">';
                }
            }
        }
        ?>
    </body>
</html>
