<?php
require '../template/template.php';
cabecera();
?>
	<h2>Lista de Socios</h2>
	<form method="POST" class="search" action="index.php?controlador=socio/search">
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
		<th>DNI</th><th>Nombre</th><th>Apellidos</th><th>Nacimiento</th><th>Email</th><th>Direccion</th><th>Codigo Postal</th><th>Poblacion</th><th>Provincia</th><th>Telefono</th>
		</tr>
		<?php foreach($socios as $socio){?>
			<tr>
				<td><?=$socio->dni?></td>
				<td><?=$socio->nombre?></td>
				<td><?=$socio->apellidos?></td>
				<td><?=$socio->nacimiento?></td>
				<td><?=$socio->email?></td>
				<td><?=$socio->direccion?></td>
				<td><?=$socio->cp?></td>
				<td><?=$socio->poblacion?></td>
				<td><?=$socio->provincia?></td>
				<td><?=$socio->telefono?></td>
			<td>
    			<a href='index.php?controlador=libro/socio&id=<?=$socio->id?>'>Ver</a>
    			<a href='index.php?controlador=libro/socio&id=<?=$socio->id?>'>Editar</a>
    			<a href='index.php?controlador=libro/socio&id=<?=$socio->id?>'>Borrar</a>
			</td>
			</tr>
		<?php } ?>
		</table>
	</body>
	</html>