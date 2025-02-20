<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>EJEMPLO PHP</title>
	<link rel="stylesheet" type="text/css" href="https://robertsallent.com/css/generic.css">
</head>
	<body>
		<h1>Kilometros a Millas</h1>
		<form method="POST">
			<label>Kilometros</label>
			<input type="number" name="kilometros">
			<br>
			<input type="submit" name="calcular" value="Calcular">
			</form>	
<?php
if(!empty($_POST['calcular'])){

    $kilometros = floatval($_POST['kilometros']);
    $resultado = $kilometros*0.621371;    
    echo "<p>Millas:</p> " .$resultado;
}
?>
</body>
</html>