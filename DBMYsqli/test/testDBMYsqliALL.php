<?php 
    include '../config/config.php';
    include '../autoload.php';
?>
<section>
<h2>selectALL()</h2>
<p>Recuperando todos los temas...</p>
<pre>
<?php 
    $consulta = "SELECT * FROM temas";
    var_dump(DBMysqli::selectAll($consulta));
?>
</pre>
<p>Recuperando libros de Stephen King (no hay)...</p>
<pre>
<?php 
    $consulta = "SELECT * FROM libros WHERE autor='Stephen King'";
    var_dump(DBMysqli::selectAll($consulta));
?>
</pre>
</section>