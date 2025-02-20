<?php 
require '../template/template.php';
    cabecera();
    ?>
		<div class="success">
			<h2>Exito</h2>
			<p><?= $mensaje?></p>
		</div>
		<div class="centrado">
			<a class="button" href="index.php?controlador=libro/list">Lista de Libros</a>
		</div>
	</body>
</html>