<?php

require_once './Db.php';

class ClaseArticulo {

    private $codigo;
    private $marca;
    private $detalle;
    private $precio;
    private $cantidad;
    private $imagen;

    function __construct() {
        
    }
    function getCodigo() {
        return $this->codigo;
    }

    function getMarca() {
        return $this->marca;
    }

    function getDetalle() {
        return $this->detalle;
    }

    function getPrecio() {
        return $this->precio;
    }

    function getCantidad() {
        return $this->cantidad;
    }

    function getImagen() {
        return $this->imagen;
    }

    function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    function setMarca($marca) {
        $this->marca = $marca;
    }

    function setDetalle($detalle) {
        $this->detalle = $detalle;
    }

    function setPrecio($precio) {
        $this->precio = $precio;
    }

    function setCantidad($cantidad) {
        $this->cantidad = $cantidad;
    }

    function setImagen($imagen) {
        $this->imagen = $imagen;
    }

    
    function CrearArticulo($datos) {
        $conn = Database::getInstance();
        $sql="INSERT INTO articulos (codigo, marca, detalle, precio,cantidad,imagen) VALUES (";
        $sql.= "'".$datos["codigo"] ."','" . $datos["marca"] ."','" . $datos["detalle"] ."',";
        $sql.=$datos["precio"] .",'" . $datos["cantidad"] ."','" . $datos["imagen"]. "')";
        $dbresponse = $conn->db->query($sql);
        if ($dbresponse == true) {
            echo 'Articulo insertado con exito';
        } else {
            echo 'Problemas al insertar el articulo.';
        }
    }

//Permite eliminar un usuario del sistema
    function EliminarArticulo($datos) {
        $conn = Database::getInstance();
       $dbresponse = $conn->db->query("Delete from articulos where codigo = " . $datos["codigo"]);
        if ($dbresponse == true) {
            echo 'Articulo eliminado con exito';
        } else {
            echo 'Problemas al eliminar el articulo.';
        }
    }

    function ListarArticulo($filtro) {

        $conn = Database::getInstance();
        $dbresponse = $conn->db->query("SELECT * FROM articulos");
        session_start();
        $_SESSION["lista-articulos"] = array();
        foreach ($dbresponse->fetchAll(PDO::FETCH_ASSOC) as $articulo) {
            array_push($_SESSION["lista-articulos"], $articulo);
        }

        header("Location: ListarArticulo.php");
    }

    function ActualizarArticulo($datos) {
        $conn = Database::getInstance();
        $valido = array();
        $sql = "UPDATE articulos SET ";
        $sql .= "codigo = '" . $datos["codigo"] . "', marca = '" . $datos["marca"] . "', detalle = '" . $datos["detalle"] . "',";
        $sql .= "precio = '" . $datos["precio"] . "', cantidad = '" . $datos["cantidad"] . "', imagen = '" . $datos["imagen"] . "'";
        $sql .= " WHERE codigo = '" . $datos["codigo"] . "'";
        $dbresponse = $conn->db->query($sql);

        if ($dbresponse == true) {
            $valido["valido"] = true;
        } else {
            $valido["valido"] = false;
        }

        return $valido;
    }

    function BuscarArticulo($data) {
        $conn = Database::getInstance();
        $dbresponse = $conn->db->query("SELECT * FROM articulos WHERE codigo='" . $data["articuloBusqueda"] . "' ");
        $resultado = $dbresponse->fetch(PDO::FETCH_ASSOC);
        $valido = array();

        if ($resultado != null) {
            $valido["valido"] = true;
            $valido["datos"] = $resultado;
        } else {
            $valido["valido"] = false;
        }
        return $valido;
    }

}
