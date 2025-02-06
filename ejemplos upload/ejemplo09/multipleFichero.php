<?php 
require_once 'exceptions/UploadException.php';
require_once 'libraries/Upload.php';

// para cada clave en $_FILES (para cada fichero subido)
foreach($_FILES as $clave => $valor){
    // intenta guardar el fichero
    try{
        $nombre = $_FILES[$clave]['name'];
        
        $ruta = Upload::save($clave, 'imagenes', true, 1038576, 'image/*');
        echo "<p>Fichero $nombre subido a $ruta.</p>";

      //si falla el fichero actual...
    }catch(UploadException $e){
        echo "<p>ERROR en $nombre: ".$e->getMessage()."</p>";
    }
    // si falla un fichero muesta el error, luego intentara el siguuiente.
}?>
