<?php
    
    // Importar la conexión
    require_once('conexion.php');

    function listar(){
        $db = getConexion();
        $sentencia = $db->prepare("SELECT * FROM tblproductos");
        return $sentencia->fetchObject();
    }

    function consultar($id){
        $db = getConexion();
        $sentencia = $db->prepare("SELECT * FROM tblproductos WHERE id = ?");
        $sentencia->execute([$id]);
        return $sentencia->fetchAll();
    }

    function actualizar($nombre, $precio, $description, $id){
        $db = getConexion();
        $sentencia = $db->prepare("UPDATE tblproductos SET nombre=?, descripcion=?, precio=? WHERE id=?");
        return $sentencia->execute([$nombre, $precio, $description, $id]);
    }

    function eliminar($id){
        $db = getConexion();
        $sentencia = $db->prepare("DELETE FROM tblproductos WHERE id = ?");
        return $sentencia->execute([$id]);
    }

    function crear($nombre, $precio, $description){
        $db = getConexion();
        $sentencia = $db->prepare("INSERT INTO tblproductos(nombre, precio, descripcion) VALUES (?,?,?) ");
        return $sentencia->execute([$nombre, $precio, $description]);
    }

?>