<?php
require '../template/template.php';
cabecera();
?>
	
	<h2>Confirmar borrado</h2>
	<p>Confirmar el borrado del Socio <b><?=$socio->dni?></b>.</p>
	
	<form method="POST" class="centrado" action="index.php?controlador=socio/destroy">
		<input type="hidden" name="id" value="<?= $id ?>">
		<input type="submit" class="button" name="confirmarborrado" value="Borrar">
	</form>
	
	<div class="centrado">
		<a class="button" href="index.php?controlador=socio/list">Lista de Socio</a>
	</div>
</body>