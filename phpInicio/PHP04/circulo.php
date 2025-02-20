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
			<label>Radio:</label>
			<input type="number" name="radio">
			<br>
			<input type="submit" name="calcular" value="Calcular">
			</form>	
<?php
if(!empty($_POST['calcular'])){

    $radio = floatval($_POST['radio']);
    
    $rDiametro = $radio*2;
    $rPerimetro = ($radio*2)*pi;
    $rArea = pi*$radio**2;
    
    echo "<p>El diametro es: </p>" .$rDiametro;
    echo "<p>El perimetro es: </p>" .$rPerimetro;
    echo "<p>El area es: </p>" .$rArea;
}
?>
</body>
</html>