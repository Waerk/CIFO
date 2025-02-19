<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>Portada</title>
		<link rel="stylesheet" type="text/css"
		href="https://robertsallent.com/css/generic.css">
	</head>
	<body>
		<h1>Portada de la biblioteca</h1>
		<menu>
			<li><a href="index.php" class="activo">Inicio</a></li>
			<li><a href="index.php?controlador=libro/list">Lista de libros</a></li>
			<li><a href="index.php?controlador=libro/create">Nuevo libro</a></li>
		</menu>
		<h2>Bienvenido...</h2>
			<p>Esta es la portada del primer ejemplo de gestion de libros de la biblioteca.</p>+
			<p>Este ejemplo es un <b>MVC sencillo</b>, todas las peticiones pasarn por el <b>index.php</b>, que actuara de dispatcher y gestionara todos los errores.</p>
		<div class="centrado">
			<a class="button" href="index.php?controlador=libro/list">Lista de Libros</a>
		</div>
	</body>
</html>