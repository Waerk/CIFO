<?php
require_once 'exceptions/UploadException.php';
require_once 'libraries/Upload.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Capturamos la carpeta seleccionada por el usuario desde el formulario
    $carpetaDestino = 'imagenes/' . $_POST['carpeta'] . '/';
    
    // Verificamos si la carpeta existe, si no, la creamos
    if (!is_dir($carpetaDestino)) {
        mkdir($carpetaDestino, 0777, true); // Crea la carpeta con permisos de lectura/escritura
    }
    

try{
    $ruta = Upload::save(
        'fichero', $carpetaDestino, true, 1048576, 'image/*', 'img_');
    echo "<p>Exito en la operacion, fichero subido a $ruta.</p>";
}catch(UploadException $e){
    echo "<p>Error: ".$e->getMessage()."</p>";
}}