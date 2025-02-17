<?php
require_once '../config/config.php';
require_once '../autoload.php';
?>
<section>
	<h2>find()</h2>
	<p>Usaremos el metodo <code>find()</code>para recuperar libros a partir de su ID.</p>
	
	<p>Recuperando el libro 3</p>
	<?php 
	   $libro = Libro::find(3);
	   echo"<p><b>".($libro ?? "Libro inexistente")."</b></p>";
	 ?>
	 <p>Recuperando el libro 300 (no existe)...</p>
	 <?php 
	   $libro = Libro::find(300);
	   echo"<p><b>".($libro ?? "Libro inexsistente")."</b></p>";
	   ?>
	</section>