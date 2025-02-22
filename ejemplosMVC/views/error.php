<?php
    require '../template/template.php';
    cabecera();
?>
		<div class="error">
			<h2>Error</h2>
			<p><?= $mensaje?></p>
		</div>
		<div class="centrado">
			<a class="button" href="index.php?controlador=libro/list">Lista de Libros</a>
		</div>
	</body>
</html>