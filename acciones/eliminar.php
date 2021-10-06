<?php 

    // Verificar
    if( !isset($_GET["id"]) ){
        http_response_code(500);
        exit();
    }

    $id = $_GET["id"];
    include_once("../database/funciones.php");
    $producto = eliminar($id);
    echo json_encode($producto);

?>