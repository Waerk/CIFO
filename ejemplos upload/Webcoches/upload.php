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
    //guarda el fichero actual
    $ruta = Upload::save(
        'fichero', $carpetaDestino, true, 2000000, 'image/*', 'img_');
    echo "<p>Exito en la operacion, fichero subido a $ruta.</p>";
}catch(UploadException $e){
    $mensajeError = "Fecha: " . date("Y-m-d H:i:s") . " - Error: " . $e->getMessage() . "\n";
    $logFilePath = 'logs/error.log';
// Escribir el mensaje de error en el archivo error.log
    try{
        // Si el archivo error.log no existe, se crea. Si existe, se añaden nuevos datos al final
    file_put_contents($logFilePath, $mensajeError, FILE_APPEND);
    } catch(Exception $e) {
        echo "<p> Error al intentar escribir en el archivo de log: " . $e->getMessage() . "</p>";
    }
    
    echo "<p>Error: " . $e->getMessage()."</p>";
    }
}else {
    echo "<p> Error: No se ha recibido un archivo válido o hay un error en la carga.</p>";
}
