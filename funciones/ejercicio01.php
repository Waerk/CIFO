<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Funciones PHP</title>
	<link rel="stylesheet" type="text/css" href="https://robertsallent.com/css/generic.css">
</head>
	<body>
		<h1>Funciones PHP</h1>
		<p>Probando el funcionamiento de array_pop().</p>
	</body>
<?php 
    $lista =['Rosa', 'Juan', 'Adrian', 'Carlos'];
    
    $ultimo = array_pop($lista);
    
    echo "<p>$ultimo</p>";
    
    echo "<pre>";
    print_r($lista);
    echo "</pre>"
?>
</html>