<?php


/**
 * Description of ClaseCompra
 *
 * @author SOL
 */

require_once './Db.php';
class ClaseCarrito {
    //put your code here

    private $idcarro;
    private $idusuario;
    private $fechacarrito;


    function __construct() {

    }

    function getId() {
        return $this->idcarro;
    }

    function getId_usuario() {
        return $this->idusuario;
    }

    function getFecha_carrito() {
        return $this->fechacarrito;
    }

    function setId($idcarro) {
        $this->idcarro = $idcarro;
    }

    function setId_usuario($id_usuario) {
        $this->idusuario = $id_usuario;
    }


    function setFecha_carrito($fecha_carrito) {
        $this->fechacarrito = $fecha_carrito;
    }



//Permite agregar nuevo usuario
    function CrearCarro($datos) {

         $conn = Database::getInstance();
        $sql="INSERT INTO carrito (idcarro, idusuario) VALUES (";
        $sql.= "'".$datos["idcarro"] ."','" . $datos["idusuario"] ."')";
        $dbresponse = $conn->db->query($sql);

        if ($dbresponse == true) {
            echo 'Carro insertado con exito';
        } else {
            echo 'Problemas al insertar el usuario.';
        }
    }

//Permite eliminar un usuario del sistema
    function EliminarCarro($datos) {
        $conn = Database::getInstance();
        $dbresponse = $conn->db->query("Delete from carrito where idcarro = " . $datos["idcarro"]);
        if ($dbresponse == true) {
            echo 'Carro eliminado con exito';
        } else {
            echo 'Problemas al eliminar la compra.';
        }
    }


    // function ListarCompras($filtro) {
    //
    //     $conn = Database::getInstance();
    //     $dbresponse = $conn->db->query("SELECT * FROM compras");
    //     session_start();
    //     $_SESSION["lista-compras"] = array();
    //       foreach ($dbresponse->fetchAll(PDO::FETCH_ASSOC) as $compra) {
    //         array_push($_SESSION["lista-compras"], $compra);
    //     }
    //
    //     header("Location: ListarCompras.php");
    // }

    function ActualizarCarro($datos) {
    $conn = Database::getInstance();
     $sql="INSERT INTO carrito (iditemcarro, codigoproducto, cantidad, idcarrito) VALUES (";
     $sql.= "'".$datos["iditemcarro"] ."','" . $datos["codigoproducto"] ."','". $datos["cantidad"] ."','"
     . $datos["idcarrito"] . "')";
     $dbresponse = $conn->db->query($sql);

     if ($dbresponse == true) {
         echo 'Item insertado con exito';
     } else {
         echo 'Problemas al insertar el usuario.';
     }
    }

    function BuscarCompra($data) {
        $conn = Database::getInstance();
        $dbresponse = $conn->db->query("SELECT * FROM compras WHERE id='" . $data["compraBusqueda"] . "' ");
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

       function BuscarCompraFactura($data) {
        $conn = Database::getInstance();
        $dbresponse = $conn->db->query("SELECT * FROM compras WHERE numero_factura='" . $data["compraBusquedaFactura"] . "' ");
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

       function ListarMisCompras($filtro) {
        $conn = Database::getInstance();
        $dbresponse = $conn->db->query("SELECT * FROM compras WHERE id_usuario= " .$filtro);
        session_start();
        $_SESSION["lista-compras"] = array();
          foreach ($dbresponse->fetchAll(PDO::FETCH_ASSOC) as $compra) {
            array_push($_SESSION["lista-compras"], $compra);
        }

        header("Location: ListarMisCompras.php");
    }


//Cierre de la clase
}
