<?php
include '../config/config.php';
include '../autoload.php';
?>
<section>
	<h2>total()</h2>
	<p>Pruebas de totales.</p>
<?php 
    echo "<p>Total de socios: <b>";
    echo DBMysqli::total('socios')."</b></p>";
    
    echo "<p>Fecha de alta del ultimo socio: <b>";
    echo DBMysqli::total ('socios','MAX', 'alta')."</b></p>";
    
    echo "<p>Nacimiento del socio mayor: <b>";
    echo DBMysqli::total('socios', 'MIN', 'nacimiento')."</b></p>";
    
    echo "<p>Precio medio de ejemplares: <b>";
    echo DBMysqli::total('ejemplares', 'AVG', 'precio')."</b></p>";
    ?>
    </section>