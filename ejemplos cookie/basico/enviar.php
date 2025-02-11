<?php
//adjunta una nueva cookie a la respuesta
// esta cookie caducara en 5 minutos
setcookie('curso', 'aplicaciones', time()+300);
?>
<!DOCTYPE html>
<html lang="es">
	<head>
	<meta charset="UTF-8">
	<title>Enviando una cookie</title>
	</head>
	<body>
		<p>Cookie "curso" enviada</p>
	</body>
</html>