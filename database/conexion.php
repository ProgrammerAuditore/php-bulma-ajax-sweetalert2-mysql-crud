<?php

    function getConexion(){
        $password =  "";
        $user = "root";
        $dbname = "php_crud";
        $host= "localhost";
        $database = new PDO("mysql:host=$host;dbname={$dbname}", $user, $password);
        $database->query("set name utf8");
        $database->setAttribute(PDO::ATTR_EMULATE_PREPARES, FALSE);
        $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $database->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        
        return $database;
    }
    
?>