<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>File upload - Ejemplo 00</title>
		<script src="script/Preview.js"></script>
	</head>
	<body>
		<form method="post" enctype="multipart/form-data" actions="upload.php">
			<label>Sube tu imagen de perfil:</label>
			<br>
			<input type="hidden" name="max_file_size" value="1000000">
			<input type="file" accept=".jpg, .jpeg, .gif, .png" name="fichero" id="file-with-preview">
			<br>
			<input type="submit" value="enviar">
		</form>
		<figure>
			<img src="imagenes/default.png" id="preview-image" width="200">
		</figure>
	</body>
</html>
<?php
