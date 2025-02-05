<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>EJEMPLO PHP</title>
	<link rel="stylesheet" type="text/css" href="https://robertsallent.com/css/generic.css">
</head>
	<body>
		<h1>Calculadora de grados</h1>
		<form method="POST">
			<label>Fahrenheit:</label>
			<input type="number" name="fahrenheit">
			<br>
			<input type="submit" name="calcular" value="Calcular">
			</form>	
<?php
if(!empty($_POST['calcular'])){

    $fahtrenheit = floatval($_POST['fahrenheit']);
    $resultado = ($fahtrenheit-32)/9*5;
    
    echo "<p>Celsius:</p> " .$resultado;
}
?>
</body>
</html>