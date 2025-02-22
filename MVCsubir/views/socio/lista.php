<?php 
require '../template/template.php';
    cabecera();
    ?>
	<h2>Lista de Socios</h2>
	<form method="POST" class="search" action="index.php?controlador=socio/search">
		<label>Campo:</label>
		<select name="campo">
			<option value="dni"
			<?= !empty($campo) && $campo=='dni' ? 'selected' : ''?>>DNI</option>
			<option value="nombre"
			<?= !empty($campo) && $campo=='nombre'? 'selected' : ''?>>Nombre</option>
			<option value="apellidos"
			<?= !empty($campo) && $campo=='apellidos' ? 'selected' : ''?>>Apellidos</option>
			<option value="nacimiento"
			<?= !empty($campo) && $campo=='nacimiento' ? 'selected' : ''?>>Nacimiento</option>
			<option value="email"
			<?= !empty($campo) && $campo=='email' ? 'selected' : ''?>>Email</option>
			<option value="direccion"
			<?= !empty($campo) && $campo=='direccion' ? 'selected' : ''?>>Direccion</option>
			<option value="cp"
			<?= !empty($campo) && $campo=='cp' ? 'selected' : ''?>>Codigo postal</option>
			<option value="poblacion"
			<?= !empty($campo) && $campo=='poblacion' ? 'selected' : ''?>>Poblacion</option>
			<option value="provincia"
			<?= !empty($campo) && $campo=='provincia' ? 'selected' : ''?>>Provincia</option>		
			<option value="apellidos"
			<?= !empty($campo) && $campo=='telefono' ? 'selected' : ''?>>Telefono</option>
		</select>
		
		<label>Valor:</label>
		<input type="text" name="valor" value="<?= $valor ?? ''?>">
		<label>Orden:</label>
			<select name="orden">
				<option value="dni"
				<?= !empty($orden) && $orden=='dni'? 'selected' : ''?>>DNI</option>
				<option value="nombre"
				<?= !empty($orden) && $orden=='nombre'? 'selected' : ''?>>Nombre</option>
				<option value="autor"
				<?= !empty($orden) && $orden=='apellidos'? 'selected': ''?>>Apellidos</option>
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
		<th>DNI</th><th>Nombre</th><th>Apellidos</th><th>Nacimiento</th><th>Email</th><th>Direccion</th><th>Codigo Postal</th><th>Poblacion</th><th>Provincia</th><th>Telefono</th><th>Operaciones</th>
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
    			<a href='index.php?controlador=socio/show&id=<?=$socio->id?>'>Ver</a>
    			<a href='index.php?controlador=socio/edit&id=<?=$socio->id?>'>Editar</a>
    			<a href='index.php?controlador=socio/delete&id=<?=$socio->id?>'>Borrar</a>
			</td>
			</tr>
		<?php } ?>
		</table>
	</body>
	</html>