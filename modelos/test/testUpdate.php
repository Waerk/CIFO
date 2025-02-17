<?php
require_once '../config/config.php';
require_once '../autoload.php';
?>
<section>
	<h2>update()</h2>
	<p>Usaremos el metodo de objeto <code>update()</code>para actualizar los datos de un libro en la BDD</p>

<?php 
    $libro = Libro::find(10);
    echo "<p><b>$libro</b></p>";
    
    $libro->titulo = 'To Kill a Mockingbird';
    $libro->autor = 'Harper Lee';
    
    $rows = $libro->update();
    echo "<p>Actualizacion correcta de $rows registros.</p>";
?>
    
    <p>Comprobando si esta correctamente actualizado...</p>
    <?= "<p><b>".Libro::find(10)."</b></p>"?>
</section>