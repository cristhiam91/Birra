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
        <script src="js/jquery/external/jquery/jquery.js" type="text/javascript"></script>
        <script src="js/Boostrapjs/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/Boostrapjs/bootstrap.bundle.min.js.map" type="text/javascript"></script>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/GeneralStyles.css" rel="stylesheet" type="text/css"/>
        <?php session_start();
        include "./ClaseArticulo.php";
        $Articulo = new ClaseArticulo();
        ?>
    </head>
    <body>


        <?php
        if ($_SESSION["datos-usuario"]["rol"] == "admin") {
            ?>
            <div class="card-body" id="contenedorAdmin">
                <h3 class="card-title"> Bienvenido <?php
                    echo $_SESSION["datos-usuario"]["nombre"];
                    ?> </h2>
                    <h5 class="card-title">Rol: <?php
                        echo $_SESSION["datos-usuario"]["rol"];
                        ?></h5>
                    <h5 class="card-title"><?php
                        echo "Fecha: " . date("d/m/Y") . "<br>";
                        ?></h5>
                    <p><a class="btn btn-dark" href="menu-usuarios.php" >Administrar Usuarios</a></p><br>
                    <p><a class="btn btn-dark" href="menu-articulos.php">Administrar articulos</a></p><br>
                    <p><a class="btn btn-dark" href="menu-compras.php">Administar compras</a></p><br>
                    <form method="post" class="mb-4" action="procesos.php">
                        <input type="hidden" name="accion" value="home-articulos">
                        <input type="submit" class="btn btn-dark" name="btnHome" value="Inicio">
                    </form>
                    <form method="post" action="procesos.php">
                        <input type="hidden" name="accion" value="Logout">
                        <input type="submit" name="btnLogout" value="Cerrar sesion" class="btn btn-primary">
                    </form>
            </div>
        </div>
        <?php
    } else {
        // include "home.php";
        $Articulo->VerArticulos($_POST["Filtro"],2);


        ?>  <!-- <br> -->
        <!-- <p><a href="MiPerfil.php" id="miPerfil">Mi Perfil</a></p><br> -->
        <!-- <p><a href="MisCompras.php" >Mis Compras</a></p><br> -->
        <!-- <p><a href="Comprar.php" >Comprar</a></p><br> -->
        <!-- <form method="post" action="procesos.php"> -->
            <!-- <input type="hidden" name="accion" value="Logout"> -->
            <!-- <input type="submit" name="btnLogout" value="Cerrar sesion"> -->
        <!-- </form> -->

        <?php
    }
    ?>


</body>
</html>
