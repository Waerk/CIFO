<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>File upload - Ejemplo 00</title>
	</head>
	<body>
		<form method="post" enctype="multipart/form-data" actions="upload.php">
			<label>Sube tu imagen de perfil:</label>
			<br>
			<input type="hidden" name="max_file_size" value="1000000">
			<input type="file" accept="image/*" name="fichero">
			<br>
			<input type="submit" value="enviar">
		</form>
	</body>
</html>
<?php
