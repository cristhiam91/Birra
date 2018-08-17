<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title></title>
    <link rel="stylesheet" type="text/css" media="screen" href="./libs/bootstrap/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="./css/home.css" />
    <script src="./js/jquery/external/jquery/jquery.js" type="text/javascript"></script>
    <script src="./libs/popper/popper.min.js" type="text/javascript"></script>
    <script src="./libs/bootstrap/bootstrap.min.js" type="text/javascript"></script>
  </head>
  <body class="bg-white h-100">
    <?php include "./templates/navbar.php"?>
    <div class="container my-5">
      <div class="jumbotron">
        <div class="row mb-2">
          <div class="col-md-3">
            <img src="./img/Display1.png" class="rounded float-left img-fluid" alt="Responsive image">
          </div>
          <div class="col-sm-4">
           <h3 class="display-3">Cerveza la Pelona</h3>
          </div>
        </div>
        <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
        <hr class="m-y-md">
        <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
        <p class="lead">
          <div class="row mt-4">
            <div class="col-sm-3">
              <input type="number" class="form-control" placeholder="1" step="1">
            </div>
            <div class="col-sm-3">
              <a class="btn btn-primary btn-md" href="#" role="button">Añadir al carro</a>
            </div>
            </div>
          </div>
        </p>
      </div>
    </div>
    <?php include './templates/footer.php'; ?>
  </body>
</html>
