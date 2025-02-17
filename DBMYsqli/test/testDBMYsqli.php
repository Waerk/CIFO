<?php
include '../config/config.php';
include '../autoload.php';
?>
<section>
<h2>select()</h2>

<p>Recuperando el socio 5...</p>
<pre>
<?php 
    $consulta = "SELECT * FROM socios WHERE id=5";
    var_dump(DBMysqli::select($consulta));
?>
</pre>

<p> Recuperando el socio 1000 (no existe)...</p>
<pre>
<?php 
    $consulta = "SELECT * FROM socios WHERE id=1000";
    var_dump(DBMysqli::select($consulta));
?>
</pre>
</section>