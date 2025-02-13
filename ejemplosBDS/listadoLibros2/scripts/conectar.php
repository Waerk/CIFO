<?php
try{
    $conexion = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    $conexion->set_charset(DB_CHARSET);
}catch(Exception $e){
    die('ERROR AL CONECTAR CON LA BDD.');
}