<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<title>File Upload</title>
		<script src="script/Preview.js"></script>
	</head>
	<body>
	<h2>Datos del fichero recibido en el servidor:</h2>
	<form method="post" enctype="multipart/form-data" action="uploadmultiple.php">
			<label>Sube tu imagen de perfil:</label>
			<br>
			<input type="hidden" name="max_file_size" value="12400000">
			<input type="file" accept=".jpg, .jpeg, .gif, .png" multiple name="ficheros[]" id="file-with-preview">
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