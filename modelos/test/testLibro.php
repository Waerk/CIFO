<?php
require_once '../config/config.php';
require_once '../autoload.php';
?>
<!-- RECUPERAR TODOS LOS LIBROS DE LA BDD -->
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

<!-- RECUPERAR UN LIBRO POR ID -->
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
	
<!-- GUARDAR UN LIBRO EN LA BDD -->
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

<!-- ACTUALIZAR UN LIBRO POR ID -->
<section>
	<h2>update()</h2>
	<p>Usaremos el metodo de objeto <code>update()</code>para actualizar los datos de un libro en la BDD</p>

<?php 
    $libro = Libro::find(10);
    echo "<p><b>$libro</b></p>";
    
    $libro->titulo = 'To Kill a Mockingbird';
    $libro->autor = 'Harper Lee';
    
    $rows = $libro->update();
    echo "<p>Actualizacion correcta de $rows registros.</p>";
?>
    
    <p>Comprobando si esta correctamente actualizado...</p>
    <?= "<p><b>".Libro::find(10)."</b></p>"?>
</section>

<!-- BORRAR UN LIBRO DE LA BDD (METODO ESTATICO) -->
<section>
	<h2>delete()</h2>
	<p>Usaremos el motodo estatico <code>delete()</code> para eliminar un libro de la BDD a partir de su ID.</p>
	
	<?php 
	   $libro = Libro::find(17);
	   echo "<p><b>".Libro::find(17)."</b></p>";
	   
	   $rows = Libro::delete(17);
	   
	   echo "<p>Eliminacion correcta de $rows registros.</p>";
	 ?>
	 
	 <p>Comprobando si esta correctamente borrado...</p>
	 <?= "<p><b>".(Libro::find(17) ?? "No existe"). "</b></p>" ?>
</section>

<!-- BORRAR UN LIBRO DE LA BDD (METODO OBJETO) -->
<section>
	<h2>deleteObject()</h2>
	<p>El metodo <code>deleteObject()</code> es una alternativa a <code> delete()</code> para eliminar un libro de la BDD.</p>
	
	<?php 
	   $libro = Libro::find(16);
	   echo "<p><b>$libro</b></p>";
	   
	   if($libro){
	       $rows = $libro->deleteObject();
	       echo "<p>Eliminacion correcta de $rows registros.</p>";
	   }
	?>
	
	<p>Comprobando si esta correctamente borrado...</p>
	<?= "<p><b>".(Libro::find(16) ?? "No existe")."</b></p>" ?>
</section>

<!-- calculo de totales -->
<section>
	<h2>total()</h2>
	<p>El metodo estatico <code>total()</code> permite realizar calculos de totales sobre la tabla libros de una forma sencilla.</p>
	
	<?php 
	   echo "<p>Total de libros: <b>";
	   echo Libro::total(). "</b></p>";
	   
	   echo "<p>Min edicion: <b>";
	   echo Libro::total('MIN','edicion')."</b></p>";
	   
	   echo "<p>Max edicion: <b>";
	   echo Libro::total('MAX', 'edicion'). "</b></p>";
	   
	   echo "<p>AVG edicion: <b>";
	   echo Libro::total('AVG', 'edicion')."</b></p>";
	  ?>
</section>
<!-- Filtros -->
<section>
	<h2>getFiltered()</h2>
	<p>El metodo estatico <code>getFiltered()</code> recupera libros mediante un filtro simple.</p>
	<p>Por ejemplo, libros de <b>Jurgen</b>:</p>
	<?php 
	$libros = Libro::getFiltered('autor', 'Jurgen');
	echo "<ul>";
	foreach($libros as $libro)
	      echo "<li>$libro->titulo de <b>$libro->autor</b></li>";
	echo "</ul>"
?>
<p>Libros con Graw en la editorial ordenado por titulo DESC</p>
<?php
    $libros = Libro::getFiltered('editorial', 'Graw', 'titulo', 'DESC');
    echo "<ul>";
    foreach($libros as $libro)
            echo "<li>$libro->titulo de <b>$libro->editorial</b></li>";
    echo "</ul>";
?>
</section>