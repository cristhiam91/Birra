<?php

include './ClaseUsuario.php';
include './ClaseArticulo.php';
include './ClaseCompra.php';
include './ClaseCarrito.php';

$accion = $_POST["accion"];

$Usuario = new ClaseUsuario();
$Articulo = new ClaseArticulo();
$Compra = new ClaseCompra();
$Carrito = new ClaseCarrito();

switch ($accion) {
    case "Login":
        $retorno = $Usuario->Login($_POST);
        break;
    case "Logout":
        session_start();
        session_destroy();
        header("Location: index.php");
        break;
    case "perfil":
        $Usuario->Login($_POST);
        break;
    case "crear-usuario":
        $Usuario->CrearUsuario($_POST);
        header("Location: menu-usuarios.php");
        break;
    case "crear-MiCuenta":
        $Usuario->CrearMiCuenta($_POST);
        //header("Location: menu-usuarios.php");
        break;
    case "actualizar-usuario":
        $retorno = $Usuario->ActualizarUsuario($_POST);
        break;
    case "estado-usuario":
        $Usuario->CambiarEstadoUsuario($_POST);
        header("Location: menu-usuarios.php");
        break;
    case "buscar-usuario":
        $retorno = $Usuario->BuscarUsuario($_POST);
        break;
    case "listar-usuario":
        $Usuario->ListarUsuarios($_POST["Filtro"]);
        break;
    case "eliminar-usuario":
        $Usuario->EliminarUsuario($_POST);
        header("Location: menu-usuarios.php");
        break;
//ARTICULO*****************************************
    case "crear-articulo":
        $Articulo->CrearArticulo($_POST);
        header("Location: menu-articulos.php");
        break;
    case "actualizar-articulo":
        $retorno = $Articulo->ActualizarArticulo($_POST);
        break;
    case "buscar-articulo":
        $retorno = $Articulo->BuscarArticulo($_POST);
        break;
    case "listar-articulos":
        $Articulo->ListarArticulo($_POST["Filtro"]);
        break;
    case "ver-articulos":
        $Articulo->VerArticulos($_POST["Filtro"],1);
        break;
    case "home-articulos":
        $Articulo->VerArticulos($_POST["Filtro"],2);
        break;
    case "eliminar-articulo":
        $Articulo->EliminarArticulo($_POST);
        header("Location: menu-articulos.php");
        break;
//COMPRA
    case "confirmar-compra":
        $Compra->CrearCompra($_POST);
        header("Location: home.php");
        break;
    case "actualizar-compra":
        $retorno = $Compra->ActualizarCompra($_POST);
        break;
    case "buscar-compra":
        $retorno = $Compra->BuscarCompra($_POST);
        break;
    case "buscar-compraFactura":
        $retorno = $Compra->BuscarCompraFactura($_POST);
        break;
    case "listar-compra":
        $Compra->ListarCompras($_POST["Filtro"]);
        break;
    case "listar-MisCompras":
        $Compra->ListarMisCompras($_POST["Filtro"]);
        break;
    case "eliminar-compra":
        $Compra->EliminarCompra($_POST);
        header("Location: menu-compras.php");
        break;
//Carro
    case "add-producto":
        $retorno = $Articulo->BuscarArticulo($_POST["codigo"]);
        if($retorno["datos"]["codigo"]>0){

          $Carrito->ItemACarro($_POST);
        }
      $Articulo->VerArticulos($_POST["Filtro"],1);
      break;
    case "ver-carrito":
        session_start();
        $Carrito->BuscarCarro($_SESSION["datos-usuario"]["cedula"]);
      break;

    case "quitar-producto":
        $Carrito->ItemFueraCarro($_POST["codigo"],$_POST["cedula"]);
        session_start();
        $Carrito->BuscarCarro($_SESSION["datos-usuario"]["cedula"]);
      break;
    case "limpiar-carrito":
        session_start();
        $Carrito->EliminarCarro($_SESSION["datos-usuario"]["cedula"]);
      break;
}
echo json_encode($retorno);
