<?php
foreach ($_FILES['ficheros']['error'] as $indice => $error){
    if(!$error){
        $nombre = $_FILES['ficheros']['name'][$indice];
        $rutaTemporal = $_FILES ['ficheros']["tmp_name"][$indice];
        $rutaFinal = "imagenes/$nombre";
        
        echo move_uploaded_file($rutaTemporal, $rutaFinal) ?
        "<p>Fichero $nombre subido correctamente.</p>":
        "<p>Error al mover el fichero $nombre.</p>";
    }else
        echo "<p>ERROR con codigo $error.</p>";
}
?>