<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Guardar socio</title>
	<link rel="stylesheet" type="text/css" href="https://robertsallent.com/css/generic.css">
</head>
	<body>
		<h1>Guardar socio</h1>
		<p>Formulario que permite guardar temas en la tabla temas de la base de datos de la biblioteca</p>
		<form method="POST" autocomplete="off">
			<label>DNI:</label>
			<input type="text" name="dni">
			<br>
			<label>Nombre:</label>
			<input type="text" name="nombre">
			<br>
			<label>Apellidos:</label>
			<input type="text" name="apellidos">
			<br>
			<label>Fecha de nacimiento:</label>
			<input type="date" name="nacimiento">
			<br>
			<label>Email:</label>
			<input type="text" name="email">
			<br>
			<label>Telefono:</label>
			<input type="number" name="telefono">
			<br>
			<label>Direccion:</label>
			<input type="text" name="direccion">
			<br>
			<label>Codigo Postal:</label>
			<input type="number" name="cp">
			<br>
			<label>Poblacion:</label>
			<input type="text" name="poblacion">
			<br>
			<label>Provincia:</label>
			<input type="text" name="provincia">
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
    $dni = $_POST['dni'];
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $nacimiento = $_POST['nacimiento'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $direccion = $_POST['direccion'];
    $cp = $_POST['cp'];
    $poblacion = $_POST ['poblacion'];
    $provincia = $_POST['provincia'];
    // preparo la consulta de insercion
    $consulta = "INSERT INTO socios(dni, nombre, apellidos, nacimiento, email, direccion, cp, poblacion, provincia, telefono)
                 VALUES('$dni', '$nombre', '$apellidos', '$nacimiento', '$email', '$direccion', '$cp', '$poblacion', '$provincia', '$telefono')";
    // ejecuto la consulta contra la BDD
    echo $conexion->query($consulta)? 'Guardado OK' : 'No se pudo guardar';
}
?>