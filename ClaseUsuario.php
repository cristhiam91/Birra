<?php

require_once './Db.php';

class ClaseUsuario {

    private $cedula;
    private $nombre;
    private $apellidos;
    private $telefono;
    private $email;
    private $nombre_de_usuario;
    private $contrasena;
    private $rol;

    function __construct() {
        
    }

    function getCedula() {
        return $this->cedula;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getApellidos() {
        return $this->apellidos;
    }

    function getTelefono() {
        return $this->telefono;
    }

    function getEmail() {
        return $this->email;
    }

    function getNombre_de_usuario() {
        return $this->nombre_de_usuario;
    }

    function getContrasena() {
        return $this->contrasena;
    }

    function getRol() {
        return $this->rol;
    }

    function setCedula($cedula) {
        $this->cedula = $cedula;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setApellidos($apellidos) {
        $this->apellidos = $apellidos;
    }

    function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setNombre_de_usuario($nombre_de_usuario) {
        $this->nombre_de_usuario = $nombre_de_usuario;
    }

    function setContrasena($contrasena) {
        $this->contrasena = $contrasena;
    }

    function setRol($rol) {
        $this->rol = $rol;
    }

//Permite agregar nuevo usuario
    function CrearUsuario($datos) {
        $conn = Database::getInstance();
        $sql = "INSERT INTO usuario (cedula, nombre, apellidos, telefono,email,nombre_de_usuario,contrasena,rol) VALUES (";
        $sql .= "'" . $datos["cedula"] . "','" . $datos["nombre"] . "','" . $datos["apellidos"] . "',";
        $sql .= $datos["telefono"] . ",'" . $datos["email"] . "','" . $datos["nombre_de_usuario"] . "','";
        $sql .= md5($datos["contrasena"]) . "','" . $datos["rol"] . "')";
        $dbresponse = $conn->db->query($sql);
        if ($dbresponse == true) {
            echo 'Usuario insertado con exito';
        } else {
            echo 'Problemas al insertar el usuario.';
        }
    }

    function CrearMiCuenta($datos) {
        $conn = Database::getInstance();
        $sql = "INSERT INTO usuario (cedula, nombre, apellidos, telefono,email,nombre_de_usuario,contrasena,rol) VALUES (";
        $sql .= "'" . $datos["cedula"] . "','" . $datos["nombre"] . "','" . $datos["apellidos"] . "',";
        $sql .= $datos["telefono"] . ",'" . $datos["email"] . "','" . $datos["nombre_de_usuario"] . "','";
        $sql .= md5($datos["contrasena"]) . "','" . $datos["rol"] . "')";
        $dbresponse = $conn->db->query($sql);
        if ($dbresponse == true) {
            echo 'Usuario insertado con exito';
            header("Location: Index.php");
        } else {
            echo 'Problemas al insertar el usuario.';
        }
    }

//Permite eliminar un usuario del sistema
    function EliminarUsuario($datos) {
        $conn = Database::getInstance();
        $dbresponse = $conn->db->query("Delete from usuario where cedula = " . $datos["cedula"]);
        if ($dbresponse == true) {
            echo 'Usuario Eliminado con exito';
        } else {
            echo 'Problemas al eliminar el usuario.';
        }
    }

    function ListarUsuarios($filtro) {

        $conn = Database::getInstance();
        $dbresponse = $conn->db->query("SELECT * FROM usuario");
        session_start();
        $_SESSION["lista-usuarios"] = array();
        foreach ($dbresponse->fetchAll(PDO::FETCH_ASSOC) as $usuario) {
            $usuario["contrasena"] = "*****";
            array_push($_SESSION["lista-usuarios"], $usuario);
        }

        header("Location: ListarUsuarios.php");
    }

    function Login($datos) {
        $conn = Database::getInstance();
        $dbresponse = $conn->db->query("SELECT * FROM usuario where cedula='" . $datos["cedula"] . "' and contrasena = '" . md5($datos["contrasena"]) . "'");
        $resultado = $dbresponse->fetch(PDO::FETCH_ASSOC);
        $valido = array();
        if ($resultado != null) {
            session_start();
            $_SESSION["datos-usuario"] = $resultado;
            $valido["valido"] = true;
            $valido["datos"] = "menu-principal.php";
        } else {
            $valido["valido"] = false;
        }
        return $valido;
    }

    function ActualizarUsuario($datos) {
        $conn = Database::getInstance();
        $valido = array();
        $sql = "UPDATE usuario SET ";
        $sql .= "cedula = '" . $datos["cedula"] . "', nombre = '" . $datos["nombre"] . "', apellidos = '" . $datos["apellidos"] . "',";
        $sql .= "telefono = '" . $datos["telefono"] . "', email = '" . $datos["email"] . "', nombre_de_usuario = '" . $datos["nombre_de_usuario"] . "',";
        $sql .= "contrasena = '" . $datos["contrasena"] . "', rol = '" . $datos["rol"] . "'";
        $sql .= " WHERE cedula = '" . $datos["cedula"] . "'";
        $dbresponse = $conn->db->query($sql);

        if ($dbresponse == true) {
            $valido["valido"] = true;
        } else {
            $valido["valido"] = false;
        }

        return $valido;
    }

    function BuscarUsuario($data) {
        $conn = Database::getInstance();
        $dbresponse = $conn->db->query("SELECT * FROM usuario WHERE cedula='" . $data["cedulaBusqueda"] . "' ");
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

//Cierre de la clase
}
