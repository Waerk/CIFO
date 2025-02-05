<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>EJEMPLO PHP</title>
	<link rel="stylesheet" type="text/css" href="https://robertsallent.com/css/generic.css">
</head>
	<body>
		<h1>Area de triangulo</h1>
		<form method="POST">
			<label>Altura:</label>
			<input type="number" name="altura">
			<br>
			<label>Base:</label>
			<input type="number" name="base">
			<br>
			<input type="submit" name="calcular" value="Calcular">
			</form>	
<?php
if(!empty($_POST['calcular'])){

    $altura = floatval($_POST['altura']);
    $base = floatval($_POST['base']);
    
    $resultado = $base*$altura/2;
    
    echo "<p>El area es: </p>" .$resultado;
}
?>
</body>
</html>