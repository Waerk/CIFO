<?php
// adjunta una cookie caducada
setcookie('curso', '', time()-5000);
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>Eliminando una cookie</title>
	</head>
	<body>
		<p>Comprueba que ya no tienes la cookie "curso"
	</body>
</html>