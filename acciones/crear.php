<?php 

    // Obtener el cuerpo de la petición 
    // es decir, request
    $cargaUtil = json_decode(file_get_contents("php://input"));

    // Verificar si el request está vacía
    if(!$cargaUtil){
        http_response_code(500);
        exit();
    }

    // Extraer valores
    $nombre = $cargaUtil->nombre;
    $descripcion = $cargaUtil->descripcion;
    $precio = $cargaUtil->precio;

    include_once('../database/funciones.php');
    $respuesta = eliminar($nombre, $precio, $descripcion);

    // Devolver al cliente la respuesta de la función
    // es decir, un response
    echo json_encode($respuesta);

?>