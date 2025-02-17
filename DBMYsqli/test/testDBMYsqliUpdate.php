<?php
include '../config/config.php';
include '../autoload.php';
?>
<section>
<h2>update()</h2>
<p>Actualizando el tema 10...</p>

<?php 
    $consulta = "UPDATE temas SET tema='Test de tema' WHERE id=10";
    
    $rows = DBMysqli::update($consulta);
    
    echo "<p>Hecho, filas afectadas: <b>$rows</b></p>";
?>
<p>Comprobando si se actualizo bien...</p>
<pre>
<?php 
    $consulta = "SELECT * FROM temas WHERE id=10";
    var_dump(DBMysqli::select($consulta));
?>
</pre>
</section>