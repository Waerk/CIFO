<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Coleccion de Coches</title>
	<link rel="stylesheet" href="https://robertsallent.com/css/generic.css">
	<link rel="icon" href="imagenes/logo/logo.png" type="image/x-icon">
    <script src="script/Preview.js"></script>
</head>
<body>
	<?php 
	require_once '../upload.php';
	require_once '../exceptions/FileException.php';
	require_once '../libraries/File.php';
	require_once '../libraries/Filelist.php';
	?>
	<h1>Listado de directorio</h1>
	<form method="post" enctype="multipart/form-data" action="">
			<label>Sube tu imagen de perfil:</label>
			<br>
			<input type="hidden" name="max_file_size" value="1240000">
			<input type="file" accept=".jpg, .jpeg, .gif, .png" name="fichero" id="file-with-preview">
			<br>
			<input type="submit" value="enviar">
	</form>	
	<section class="gallery w75 centered-block my2">
	<?php 
	   $directorio = "imagenes";
	   $archivos =[];
	   
	   $handler = opendir($directorio);
	   
	   while ($file = readdir($handler))
	       if ($file!="."&& $file!="..")
	           $archivos[] = $file;
	       
	   closedir($handler);
	   sort($archivos);
	   
	   foreach($archivos as $foto)
	       echo "<figure class='card'><img src='$directorio/$foto'></figure>";
	   ?>
</section>
</body>