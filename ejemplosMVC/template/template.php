<?php
function cabecera(){?>
    <!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>Biblioteca</title>
		<link rel="stylesheet" type="text/css"
		href="https://robertsallent.com/css/generic.css">
	</head>
	<body>
		<h1>Portada de la biblioteca</h1>
		<menu class="menu">
			<li><a href="index.php" class="activo">Inicio</a></li>
			<li><a href="index.php?controlador=libro/list">Lista de libros</a></li>
			<li><a href="index.php?controlador=libro/create">Nuevo libro</a></li>
			<li><a href="index.php?controlador=socio/list">Lista de Socios</a></li>
			<li><a href="index.php?controlador=socio/create">Nuevo Socio</a>
		</menu>
<?php }?>
  