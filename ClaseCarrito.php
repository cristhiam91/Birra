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
        $sql="INSERT INTO carrito (idusuario) VALUES (";
        $sql.= "'".  $datos["idusuario"] ."')";
        $dbresponse = $conn->db->query($sql);

        if ($dbresponse == true) {
            echo 'Carro insertado con exito';
        } else {
            echo 'Problemas al insertar el carro.';
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

    function ItemACarro($datos) {
    $conn = Database::getInstance();
     $sql="INSERT INTO itemcarrito (codigoproducto, idcarrito) VALUES (";
     $sql.= "'". $datos["codigo"] ."','" . $datos["cedula"] . "'); ";
     $sql.= "UPDATE articulos SET cantidad = cantidad-1 WHERE codigo='" . $datos["codigo"] . "';";
     $dbresponse = $conn->db->query($sql);

     if ($dbresponse == true) {
       echo "<script type='text/javascript'>alert('OBJETO AÑADIDO CON EXITO');</script>";
     } else {
       echo "<script type='text/javascript'>alert('PROBLEMAS AL AÑADIR EL OBJETO');</script>";
     }
    }

    function ItemFueraCarro($dato, $cedula) {
     $conn = Database::getInstance();
     session_start();
     $sql="DELETE FROM itemcarrito WHERE codigoproducto ='" . $dato . "' AND idcarrito= '" . $cedula . "'; ";
     $sql.= "UPDATE articulos SET cantidad = cantidad+1 WHERE codigo='" . $dato . "';";
     $dbresponse = $conn->db->query($sql);

     if ($dbresponse == true) {
         echo 'Item eliminado con exito';
     } else {
         echo 'Problemas al eliminar el item.';
     }
    }

    function BuscarCarro($data) {
      $conn = Database::getInstance();
      $dbresponse = $conn->db->query("SELECT * FROM itemcarrito WHERE idcarrito='" . $_SESSION["datos-usuario"]["cedula"]  . "'");
      $_SESSION["items-carro"] = array();
      foreach ($dbresponse->fetchAll(PDO::FETCH_ASSOC) as $articulo) {
          array_push($_SESSION["items-carro"], $articulo);
      }

      $_SESSION["mis-productos"] = array();

      foreach ($_SESSION["items-carro"] as $articulo) {
        $dbresponse2 = $conn->db->query("SELECT * FROM articulos WHERE codigo='" . $articulo["codigoproducto"] . "'");

        $resultado = $dbresponse2->fetch(PDO::FETCH_ASSOC);

          array_push($_SESSION["mis-productos"], $resultado);

      }
          header("Location: VerCarrito.php");
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

    //Permite eliminar un carro del sistema
        function EliminarCarro($dato) {
            $conn = Database::getInstance();
            $dbresponse = $conn->db->query("Select * from itemcarrito where idcarrito = '" . $dato . "'");

            $_SESSION["items-carro"] = array();

            foreach ($dbresponse->fetchAll(PDO::FETCH_ASSOC) as $articulo) {
                  $this->ItemFueraCarro($articulo["codigoproducto"], $dato);
                }

            header("Location: home.php");

        }


//Cierre de la clase
}
