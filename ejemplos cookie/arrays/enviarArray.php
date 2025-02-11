<?php
include 'Producto.php';

$objetos = [];
$objetos[] = new Producto ('Cafe', 2.75);
$objetos[] = new Producto ('Galletas', 2);
$obejtos[] = new Producto ('Leche', 0.95);

setcookie('carro', serialize($objetos), time()+300);
?>
<!DOCTYPE html>
<html lang="es">
	<head>
	<meta charset="UTF-8">
	<title>Enviando una cookie</title>
	</head>
	<body>
		<p>Cookie "carro" enviada</p>
	</body>
</html>