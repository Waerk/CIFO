<?php 
require '../template/template.php';
    cabecera();
    ?>
		<h1>Error</h1>
		<menu>
			<li><a href="index.php">Inicio</a></li>
			<li><a href="index.php?controlador=libro/list">Lista de libros</a></li>
			<li><a href="index.php?controlador=libro/create">Nuevo libro</a></li>
		</menu>
		<div class="error">
			<h2>Error</h2>
			<p><?= $mensaje?></p>
		</div>
		<div class="centrado">
			<a class="button" href="index.php?controlador=libro/list">Lista de Libros</a>
		</div>
	</body>
</html>