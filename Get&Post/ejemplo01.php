<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Guardar tema</title>
	<link rel="stylesheet" type="text/css" href="https://robertsallent.com/css/generic.css">
</head>
	<body>
		<h1>Guardar tema</h1>
		<p>Formulario que permite guardar temas en la tabla temas de la base de datos de la biblioteca</p>
		<form method="POST" autocomplete="off">
			<label>Tema:</label>
			<input type="text" name="tema">
			<br>
			<label>Descripcion:</label>
			<input type="text" name="descripcion">
			<br>
			<input type="submit" class="button" name="guardar" value="Guardar tema">
			</form>
	</body>
</html>	
<?php
//si llegan los datos del formulario...
if(!empty($_POST['guardar'])){
    //crea una conexion con la bdd
    $conexion = new mysqli('localhost', 'root', '', 'biblioteca');
    $conexion ->set_charset('utf8');
    //recupera los datos que vienen por POST
    $tema = $_POST['tema'];
    $descripcion = $_POST['descripcion'];
    // preparo la consulta de insercion
    $consulta = "INSERT INTO temas(tema, descripcion)
                 VALUES('$tema', '$descripcion')";
    // ejecuto la consulta contra la BDD
    echo $conexion->query($consulta)? 'Guardado OK' : 'No se pudo guardar';
}
?>