<?php
require_once '../config/config.php';
require_once '../autoload.php';
?>
<!-- RECUPERAR TODOS LOS SOCIOS DE LA BDD -->
<section>
	<h2>all()</h2>
	<p>Usaremos <code>Socio::all()</code>para recuperar todos los socios desde la BDD</p>
	
	<?php 
	$socios = Socio::all();
	
	echo"<ul>";
	foreach($socios as $socio)
	      echo "<li>$socio</li>";
	echo"</ul>";
	?>
</section>