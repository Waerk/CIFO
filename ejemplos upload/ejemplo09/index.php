<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<title>File Upload</title>
		<script src="script/Preview.js"></script>
	</head>
	<body>
	<h2>Subida múltiple de ficheros</h2>
	<p>Si alguno falla no se sube pero el resto sí.</p>
	<form method="post" enctype="multipart/form-data" action="multipleFichero.php">
			<label>Sube las fotos del producto:</label>
			<br>
			<input type="file" accept="image/*" name="fichero1">
			<br>
			<input type="file" accept="image/*" name="fichero2">
			<br>
			<input type="file" accept="image/*" name="fichero3">
			<br>
			<input type="submit" value="enviar">
		</form>
		<figure>
			<img src="imagenes/default.png" id="preview-image" width="200">
		</figure>
	<pre>
	<?php 
	   var_dump($_FILES);
	 ?>
	 </pre>
	 </body>
</html>