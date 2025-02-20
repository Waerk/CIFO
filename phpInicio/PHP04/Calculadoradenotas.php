<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>EJEMPLO PHP</title>
	<link rel="stylesheet" type="text/css" href="https://robertsallent.com/css/generic.css">
</head>
	<body>
		<h1>Calculadora de notas</h1>
		<form method="POST">
			<label>Teoría:</label>
			<input type="number" name="teoria" max="10">
			<br>
			<label>Práctica:</label>
			<input type="number" name="practica" max="10">
			<br>
			<input type="submit" name="calcular" value="Calcular">
			</form>	
<?php
if(!empty($_POST['calcular'])){

    $teoria = floatval($_POST['teoria']);
    $practica = floatval($_POST['practica']);
    
    $resultado = $teoria*0.3+$practica*0.7;
    
    echo "<p>Tu nota es: " .$resultado;
}
?>
</body>
</html>