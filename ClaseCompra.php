<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ClaseCompra
 *
 * @author SOL
 */

require_once './Db.php';
class ClaseCompra {
    //put your code here

    private $id;
    private $id_usuario;
    private $id_articulo;
    private $numero_factura;
    private $fecha_compra;


    function __construct() {
        
    }

    function getId() {
        return $this->id;
    }

    function getId_usuario() {
        return $this->id_usuario;
    }

    function getId_articulo() {
        return $this->id_articulo;
    }

    function getNumero_factura() {
        return $this->numero_factura;
    }

    function getFecha_compra() {
        return $this->fecha_compra;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setId_usuario($id_usuario) {
        $this->id_usuario = $id_usuario;
    }

    function setId_articulo($id_articulo) {
        $this->id_articulo = $id_articulo;
    }

    function setNumero_factura($numero_factura) {
        $this->numero_factura = $numero_factura;
    }

    function setFecha_compra($fecha_compra) {
        $this->fecha_compra = $fecha_compra;
    }



//Permite agregar nuevo usuario
    function CrearCompra($datos) {

       //$dbresponse = $conn->db->query("INSERT INTO usuario(cedula) VALUES ('".$datos["cedula"].")");

//        $sql="INSERT INTO usuario VALUES ";
//        $sql.="cedula = '" . $datos["cedula"] ."', nombre = '" . $datos["nombre"] ."', apellidos = '" . $datos["apellidos"] ."',";
//        $sql.="telefono = '" . $datos["telefono"] ."', email = '" . $datos["email"] ."', nombre_de_usuario = '" . $datos["nombre_de_usuario"]."',";
//        $sql.="contrasena = '" . $datos["contrasena"] ."', rol = '" . $datos["rol"]. "'";
//        $dbresponse = $conn->db->query($sql);
       
         $conn = Database::getInstance();
        $sql="INSERT INTO usuario (cedula, nombre, apellidos, telefono,email,nombre_de_usuario,contrasena,rol) VALUES (";
        $sql.= "'".$datos["cedula"] ."','" . $datos["nombre"] ."','" . $datos["apellidos"] ."',";
        $sql.=$datos["telefono"] .",'" . $datos["email"] ."','" . $datos["nombre_de_usuario"]."','";
        $sql.=$datos["contrasena"] ."','" . $datos["rol"] . "')";
        $dbresponse = $conn->db->query($sql);
       
       
        if ($dbresponse == true) {
            echo 'Usuario insertado con exito';
        } else {
            echo 'Problemas al insertar el usuario.';
        }
    }

//Permite eliminar un usuario del sistema
    function EliminarCompra($datos) {
        $conn = Database::getInstance();
        $dbresponse = $conn->db->query("Delete from compras where id = " . $datos["id"]);
        if ($dbresponse == true) {
            echo 'Compra Eliminado con exito';
        } else {
            echo 'Problemas al eliminar la compra.';
        }
    }


    function ListarCompras($filtro) {

        $conn = Database::getInstance();
        $dbresponse = $conn->db->query("SELECT * FROM compras");
        session_start();
        $_SESSION["lista-compras"] = array();
          foreach ($dbresponse->fetchAll(PDO::FETCH_ASSOC) as $compra) {
            array_push($_SESSION["lista-compras"], $compra);
        }

        header("Location: ListarCompras.php");
    }

    function ActualizarCompra($datos) {
        $conn = Database::getInstance();
        $valido = array();
        $sql = "UPDATE compras SET ";
        $sql.="id = '" . $datos["id"] ."', id_usuario = '" . $datos["id_usuario"] ."', id_articulo = '" . $datos["id_articulo"] ."',";
        $sql.="numero_factura = '" . $datos["numero_factura"] ."', fecha_compra = '" . $datos["fecha_compra"] . "'";
        $sql .= " WHERE id = '" . $datos["id"] . "'";
        $dbresponse = $conn->db->query($sql);
        
        if($dbresponse  == true){
            $valido["valido"] = true;            
        }else{
            $valido["valido"] = false;
        }
        
        return $valido;      
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
