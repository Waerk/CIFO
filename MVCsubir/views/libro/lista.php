<?php
require '../template/template.php';
cabecera();
?>
	<h2>Lista de Libros</h2>
	<form method="POST" class="search" action="index.php?controlador=libro/search">
		<label>Campo:</label>
		<select name="campo">
			<option value="titulo"
			<?= !empty($campo) && $campo=='titulo' ? 'selected' : ''?>>Titulo</option>
			<option value="editorial"
			<?= !empty($campo) && $campo=='editorial'? 'selected' : ''?>>Editorial</option>
			<option value="autor"
			<?= !empty($campo) && $campo=='autor' ? 'selected' : ''?>>Autor</option>
		</select>
		
		<label>Valor:</label>
		<input type="text" name="valor" value="<?= $valor ?? ''?>">
		<label>Orden:</label>
			<select name="orden">
				<option value="titulo"
				<?= !empty($orden) && $orden=='titulo'? 'selected' : ''?>>Titulo</option>
				<option value="editorial"
				<?= !empty($orden) && $orden=='editorial'? 'selected' : ''?>>Editorial</option>
				<option value="autor"
				<?= !empty($orden) && $orden=='autor'? 'selected': ''?>>Autor</option>
			</select>
		<input type="radio" name="sentido" value="ASC"
			<?= empty($sentido) || $sentido=='ASC'? 'checked': ''?>>
			<label>ASC</label>
		<input type="radio" name="sentido" value="DESC"
			<?= empty($sentido) || $sentido=='DESC'? 'checked': ''?>>
			<label>DESC</label>
			
		<input type="submit" class="button" name="filtro" value="Filtrar">
		
		<a class="button" href="index.php?controlador=socio/list">Quitar filtros</a>
	</form>
	<table class="bloqueCentrado w100">
		<tr>
		<th>Titulo</th><th>Autor</th><th>Editorial</th><th>Operaciones</th>
		</tr>
		<?php foreach($libros as $libro){?>
			<tr>
				<td><?=$libro->titulo?></td>
				<td><?=$libro->autor?></td>
				<td><?=$libro->ediotrial?></td>
			<td>
    			<a href='index.php?controlador=libro/show&id=<?=$libro->id?>'>Ver</a>
    			<a href='index.php?controlador=libro/edit&id=<?=$libro->id?>'>Editar</a>
    			<a href='index.php?controlador=libro/delete&id=<?=$libro->id?>'>Borrar</a>
			</td>
			</tr>
		<?php } ?>
		</table>
	</body>
	</html>