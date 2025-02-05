<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Guardar checkbox</title>
	<link rel="stylesheet" type="text/css" href="https://robertsallent.com/css/generic.css">
</head>
	<body>
		<h1>Guardar checkbox</h1>
		<p>Formulario que permite guardar checkbox en la tabla  de la base de datos de la biblioteca</p>
	<form method="POST" autocomplete="off">
			<fieldset>
				<legend>Datos</legend>
				<label>Usuario:</label>
				<input type="text" name="usuario">
				<br>
				<label>Clave:</label>
				<input type="password" name="pwd">
				<br>
				<input type="radio" name="sexo" value="H" checked>
				<label>Hombre</label>
				<input type="radio" name="sexo" value="M">
				<label>Mujer</label>
				<br>
				
				<select name="provincia">
					<option value="BAR">Barcelona</option>
					<option value ="GI" selected>Girona</option>
				</select>
			</fieldset>
			<fieldset>
			<legend>Vehículo</legend>
			<input type="checkbox" name="bici" value="1">
			<label>Tengo bici</label>
			<br>
			<input type="checkbox" name="moto" value="1">
			<label>Tengo moto</label>
			<input type="checkbox" name="coche" value="1">
			<label>Tengo coche</label>
			<br>
			</fieldset>
		<input type="submit" class="button" name="guardar" value="Guardar">
		<input type="reset" class="button" value="Borrar">
	</form>
<?php
if(!empty($_POST['guardar'])){
    $us = $_POST['usuario'];
    $pa = md5($_POST['pwd']);
    $se = $_POST['sexo'];
    $pr = $_POST ['provincia'];
    
    $bi= empty($_POST['bici']) ? 0 : 1;
    $mo= empty($_POST['moto']) ? 0 : 1;
    
    $co = $_POST['coche'] ?? 0;
    
    $consulta= "INSTER INTO tabla(user, pass, sexo, provincia, bici, moto, coche)
                VALUES ('$us', '$pa', '$se  ', '$pr', $bi, $mo, $co)";
    
    echo $consulta;
}?>
