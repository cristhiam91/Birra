<?php session_start(); ?>
<!-- Navbar, needs bootstrap -->
<nav class="navbar navbar-expand-lg navbar-light bg-warning">
  <a class="navbar-brand" href="#">My Beer Store</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <form method="post" action="procesos.php">
              <input type="hidden" name="accion" value="home-articulos">
              <input type="submit" class="btn btn-warning" name="btnHome" value="Inicio">
          </form>
        </li>
      <li class="nav-item">
        <form method="post" action="procesos.php">
            <input type="hidden" name="accion" value="ver-articulos">
            <!-- <input class="nav-link" type="submit" name="btnListarArticulo" value="Tienda"> -->
            <input type="submit" class="btn btn-warning" name="btnVerArticulo" value="Tienda">
        </form>
            <!-- <a class="nav-link" href="VerProductos.php">Tienda</a> -->
      </li>
      <li class="nav-item">
        <form method="post" action="procesos.php">
            <input type="hidden" name="accion" value="ver-carrito">
            <input type="submit" class="btn btn-warning" name="btnVerCarrito" value="Carrito">
        </form>
      </li>
      <li class="nav-item">
        <a class="btn btn-warning" href="MisCompras.php">Mis Compras</a>
      </li>
      <li class="nav-item">
        <a class="btn btn-warning" href="MiPerfil.php">Perfil</a>
      </li>
      <?php
      if ($_SESSION["datos-usuario"]["rol"] == "admin") {
          ?>
          <li class="nav-item">
            <a class="btn btn-warning" href="menu-principal.php">Seccion Admin</a>
          </li>
      <?php } ?>
    </ul>
      <form class="form-inline my-2 my-lg-0" method="post" action="procesos.php">
          <input type="hidden" name="accion" value="Logout">
          <!-- <input type="submit" name="btnLogout" value="Cerrar sesion"> -->
          <button class="btn btn-dark my-2 my-sm-0" name="btnLogout" type="submit">Logout</button>
      </form>
  </div>
</nav>
