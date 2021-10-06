<?php 

    include_once('../database/funciones.php');
    $respuesta = listar();

    // Devolver al cliente la respuesta de la función
    // es decir, un response
    echo json_encode($respuesta);

?>