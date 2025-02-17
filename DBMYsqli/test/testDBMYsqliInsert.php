<?php
include '../config/config.php';
include '../autoload.php';
?>
<section>
<h2>Insert()</h2>
<p>Guardando un nuevo tema...</p>
<pre>
<?php 
    $consulta = "INSERT INTO temas (tema, descripcion)
                 VALUES('Viajes', 'Viaje con nosotros si quiere jugar')";
    $id = DBMysqli::insert($consulta);
    
    echo "<p> El ID del nuevo tema es <b>$id></b></p>";
?>

<p>Comprobando si se guardo bien...</p>
</pre>
<?php 
    $consulta = "SELECT * FROM temas WHERE id=$id";
    var_dump(DBMysqli::select($consulta));
?>
</pre>
</section>