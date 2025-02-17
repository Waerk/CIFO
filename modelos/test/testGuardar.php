<?php
require_once '../config/config.php';
require_once '../autoload.php';
?>
<section>
	<h2>save()</h2>
	<p>Usaremos el metodo de objeto <code>save()</code>para guardar un libro en la BDD</p>
	
	<?php 
	   $libro = new Libro();
	   
	   $libro->isbn = uniqid();
	   $libro->titulo = 'A sangre fría';
	   $libro->editorial = 'Anagrama';
	   $libro->idioma = 'Castellano';
	   $libro->autor ='Truman Capote';
	   $libro->edicion = 15;
	   $libro->edadrecomendada = 18;
	   
	   $libro->save();
	   echo "<p> Guardado correctamente con ID: <b>$libro->id</b></p>";
	   ?>
	   <p> Comprobando si esta correctamente guardado...</p>
	   <?= "<p><b>".Libro::find($libro->id)."</b></p>" ?>
	</section>