<?php

include './ClaseUsuario.php';
include './ClaseArticulo.php';
include './ClaseCompra.php';
$accion = $_POST["accion"];

$Usuario = new ClaseUsuario();
$Articulo = new ClaseArticulo();
$Compra = new ClaseCompra();
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
    case "eliminar-articulo":
        $Articulo->EliminarArticulo($_POST);
        header("Location: menu-articulos.php");
        break;
//COMPRA
    case "crear-compra":
        $Compra->CrearCompra($_POST);
        header("Location: menu-compras.php");
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
}
echo json_encode($retorno);
