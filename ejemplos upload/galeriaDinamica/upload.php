<?php
require_once '../exceptions/UploadException.php';
require_once '../libraries/Upload.php';

try{
    $ruta = Upload::save(
        'fichero', 'imagenes', true, 1048576, 'image/*', 'img_',);
    echo "<p>Exito en la operacion, fichero subido a $ruta.</p>";
}catch(UploadException $e){
    echo "<p>Error: ".$e->getMessage()."</p>";
}