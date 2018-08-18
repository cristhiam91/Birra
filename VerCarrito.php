
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>My Beer Store Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="./libs/bootstrap/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="./css/home.css" />
    <script src="./js/jquery/external/jquery/jquery.js" type="text/javascript"></script>
    <script src="./libs/popper/popper.min.js" type="text/javascript"></script>
    <script src="./libs/bootstrap/bootstrap.min.js" type="text/javascript"></script>
</head>
<body class="bg-white" >
<?php
include "./templates/navbar.php";
?>

    <div class="container-fluid">
    <div class="row justify-content-md-center bg-light">
      <h4 class="col-sm-10 mt-4 mb-4 text-center"><strong>Carrito</strong></h4>
        </div>
      <div class="row justify-content-start bg-true-light">
        <?php

        if (isset($_SESSION["mis-productos"])) {
            if (count($_SESSION["mis-productos"]) > 0) {
                foreach ($_SESSION["mis-productos"] as $articulo) {
                  echo '<div class="col-sm-6 col-md-4 col-lg-3 mt-3">';
                  echo '<div class="card bg-dark text-white shadow">';
                  echo '<img class="card-img-top img-fluid w-100" style="max-height: 350px;" src='. $articulo["imagen"] .' alt="Card image cap">';
                  echo  '<div class="card-body">';
                  echo '<h5 class="card-title">'. $articulo["detalle"] .'</h5>';
                  echo  '<h5 class="card-text">'. $articulo["marca"] .'</h5><hr class="mb-3">';
                  echo  '<p class="card-text">'. $articulo["precio"] .' colones</p>';
                  echo '<form method="post" action="procesos.php">';
                  echo  '<input type="hidden" name="accion" value="quitar-producto">';
                  echo  '<input type="hidden" name="codigo" value="' .$articulo["codigo"] . '">';
                  echo  '<input type="hidden" name="cedula" value="' . $_SESSION["datos-usuario"]["cedula"] . '">';
                  echo  '<input type="submit" class="btn btn-primary" name="btnHome" value="Eliminar">';
                  echo  '</form>';
                  echo    '</div>';
                  echo    '</div>';
                  echo '</div>';
                }
            }else {
              echo '</div>';
              echo '<div class="row justify-content-md-center bg-true-light">';
              echo  '<h4 class="col-sm-10 mt-5 mb-5 text-center"><strong>Sin objetos en el carrito</strong></h4>';
              echo '</div>';
            }
        }
        ?>

    </div>
  </div>
    <div class="bg-true-light">
      <br>
      <?php if (isset($_SESSION["mis-productos"])) {
          if (count($_SESSION["mis-productos"]) > 0) { ?>

      <form method="post" action="procesos.php">
          <input type="hidden" name="accion" value="limpiar-carrito">
          <input type="submit" class="btn btn-danger btn-lg btn-block col-100 mb-4" name="btnLimpiarCarrito" value="Limpiar Carrito">
      </form>
      <form method="post" action="procesos.php">
          <input type="hidden" name="accion" value="confirmar-compra">
          <input type="submit" class="btn btn-success btn-lg btn-block col-100 mb-5" name="btnConfirmarCarrito" value="Confirmar Compra">
      </form>

    <?php }}?>
      <br>
</div>
<?php include './templates/footer.php'; ?>
</body>
</html>
