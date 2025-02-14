<h1 class="centered">Lista de libros</h1>
<table class="w75 mxauto">
<tr>
<th>ISBN</th>
<th>Titulo</th>
<th>Autor</th>
<th>Enlace</th>
</tr>
<?php foreach($libros as $libro){ ?>
	<tr>
		<td><?= $libro->isbn?></td>
		<td class="bold"><?= $libro->titulo?></td>
		<td> <?= $libro->autor?></td>
		<td><a class="button" href='ver.php'>Volver</a></td>
		</tr>
		<?php } ?>
</table>