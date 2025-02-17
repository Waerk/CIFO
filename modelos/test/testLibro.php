<?php
require_once '../config/config.php';
require_once '../autoload.php';
?>
<section>
	<h2>all()</h2>
	<p>Usaremos <code>Libro::all()</code>para recuperar todos los libros desde la BDD</p>
	
	<?php 
	   $libros = Libro::all();
	   
	   echo "<ul>";
	   foreach($libros as $libro)
	       echo "<li>$libro</li>";
	   echo "</ul>";
	   ?>
	</section>