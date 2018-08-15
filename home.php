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
    <div class="row justify-content-md-center bg-Light">
        <div id="carouselHome" class="carousel slide col-8 mt-3 mb-3" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100 img-fluid rounded" src="./img/Home1.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100 img-fluid rounded" src="./img/Home2.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100 img-fluid rounded" src="./img/Home3.jpg" alt="Second slide">
                </div>
             </div>
        <a class="carousel-control-prev" href="#carouselHome" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselHome" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        </div>
    </div>
    <div class="row justify-content-md-center bg-true-light">
      <h4 class="col-sm-10 mt-3 text-center"><strong>Nuevos Productos</strong></h4>
      <?php for($i=0; $i<=6; $i+=1){ ?>
    <div class="col-sm-3 mt-3 mb-3  ">
        <div class="card shadow">
        <img class="card-img-top img-fluid w-100" src="./img/Display1.png" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Producto 1</h5>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum fuga atque nisi vel, delectus labore inventore mollitia alias.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
        </div>
    </div>
  <?php } ?>
    </div>
    <div class="row justify-content-md-center bg-warning text-dark">
      <h4 class="col-sm-10 mt-3 text-center"><strong>Mas vendidos</strong></h4>
      <?php for($i=0; $i<=6; $i+=1){ ?>
    <div class="col-sm-3  mt-3 mb-3">
        <div class="card bg-dark text-white shadow">
        <img class="card-img-top img-fluid w-100" src="./img/Display1.png" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Producto 1</h5>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum fuga atque nisi vel, delectus labore inventore mollitia alias.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
        </div>
    </div>
  <?php } ?>
    </div>
    </div>
    <?php include './templates/footer.php'; ?>
</body>
</html>
