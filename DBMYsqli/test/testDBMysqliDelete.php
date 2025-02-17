<?php
include '../config/config.php';
include '../autoload.php';
?>
<section>
<h2>delete()</h2>
<p>Borrando el tema 5...</p>
<?php 
    $consulta = "DELETE FROM temas WHERE id=5";
    $rows = DBMysqli::delete($consulta);
    
    echo "<p>Hecho , filas afectadas: <b>$rows</b></p>";
?>

<p>Comprobando si se borró...</p>
<pre>
<?php 
    $consulta = "SELECT * FROM temas WHERE id=5";
    var_dump(DBMysqli::select($consulta));
?>
</pre>
</section>