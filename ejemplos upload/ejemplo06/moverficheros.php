<?php
// si se produce un error...
if($codigo = $_FILES ['fichero']['error'])
    throw new Exception('ERROR, con código: '.$codigo);

// recupera la ruta que se le asigna al fichero en la carpeta temporal
$rutaTemporal = $_FILES['fichero']['tmp_name'];

// recupera el nombre original del fichero
$nombreFichero = $_FILES['fichero']['name'];

// esta sera la ruta final donde ubicamos el archivo, debe ser accesible
$rutaFinal = "imagenes/$nombreFichero";

//mueve el fichero de la ruta temporal a la ruta final
if (!move_uploaded_file($rutaTemporal, $rutaFinal))
    throw new Exception('Error al mover el fichero');
echo 'El fichero se movio correctamente';
// si el tamaño es superior al indicado...
$tamano = $_FILES['fichero']['size'];
if($tamano  > 1240000)
    throw new Exception('El fichero supera el tamaño permitido');
echo "<p> El tamaño es $tamano bytes, el fichero es correcto.</p>";

//FORMA ORIENTADA A OBJETO(lo haremos asi)
$finfo = new finfo(FILEINFO_MIME_TYPE);
echo $finfo->file($rutaFinal).'<br>';
?>
