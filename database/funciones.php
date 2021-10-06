<?php
    
    // Importar la conexión
    require_once('conexion.php');

    function listar(){
        $db = getConexion();
        $sentencia = $db->query("SELECT * FROM tblproductos");
        return $sentencia->fetchall();
    }

    function consultar($id){
        $db = getConexion();
        $sentencia = $db->prepare("SELECT * FROM tblproductos WHERE id = ?");
        $sentencia->execute([$id]);
        return $sentencia->fetchObject();
    }

    function actualizar($nombre, $precio, $description, $id){
        $db = getConexion();
        $sentencia = $db->prepare("UPDATE tblproductos SET nombre=?, descripcion=?, precio=? WHERE id=?");
        return $sentencia->execute([$nombre, $description, $precio, $id]);
    }

    function eliminar($id){
        $db = getConexion();
        $sentencia = $db->prepare("DELETE FROM tblproductos WHERE id = ?");
        return $sentencia->execute([$id]);
    }

    function crear($nombre, $description, $precio){
        $db = getConexion();
        $sentencia = $db->prepare("INSERT INTO tblproductos (nombre, descripcion, precio) VALUES (?,?,?) ");
        return $sentencia->execute([$nombre, $description,  $precio]);
    }

?>