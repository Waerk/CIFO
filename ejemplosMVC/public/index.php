<?php 
require_once '../config/config.php';
require_once '../autoload.php';

try{
    @require '../controllers/'.($_GET['controlador'] ?? DEFAULT_CONTROLLER).'.php';
}catch(Throwable $e){
    $mensaje =$e->getMessage();
    require '../views/error.php';
}?>