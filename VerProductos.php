
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
<body class="bg-white">
<?php
include "./templates/navbar.php"

?>

    <div class="container-fluid">
    <div class="row justify-content-md-center bg-light">
      <h4 class="col-sm-10 mt-4 mb-4 text-center"><strong>Productos</strong></h4>
        </div>
      <div class="row justify-content-start bg-true-light">
        <?php
        if (isset($_SESSION["lista-articulos"])) {
            if (count($_SESSION["lista-articulos"]) > 0) {
                foreach ($_SESSION["lista-articulos"] as $articulo) {
                  echo '<div class="col-sm-6 col-md-4 col-lg-3 mt-3">';
                  echo '<div class="card bg-dark text-white shadow">';
                  echo '<img class="card-img-top img-fluid w-100" style="max-height: 350px;" src='. $articulo["imagen"] .' alt="Card image cap">';
                  echo  '<div class="card-body">';
                  echo '<h5 class="card-title">'. $articulo["detalle"] .'</h5>';
                  echo  '<h5 class="card-text">'. $articulo["marca"] .'</h5><hr class="mb-3">';
                  echo  '<p class="card-text">'. $articulo["precio"] .' colones</p>';
                  echo  '<p class="card-text">'. $articulo["cantidad"] .' disponibles</p><hr>';
                  echo  '<a href="#" class="btn btn-primary">Comprar</a>';
                  echo    '</div>';
                  echo    '</div>';
                  echo '</div>';
                }
            }
        }
        ?>

    </div>
    </div>
    <div class="bg-true-light">
      <br>
</div>
    <?php include './templates/footer.php'; ?>
</body>
</html>
