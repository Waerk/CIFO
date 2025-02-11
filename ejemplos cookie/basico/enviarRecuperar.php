<?php
    setcookie('centro', 'CIFO Sabadell', time()+300);
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>Consideraciones...</title>
	</head>
	<body>
		<p>Si todo ha ido bien, ahora tienes una cookie "centro" en tu PC.</p>
		
		<p>Sin embargo, en el siguiente parrafo se indica que la cookie no ha sido recibida. Es normal puesto que ha sido enviada del servidor al cliente y no se ha recibido aun en el servidor de nuevo, cuando hagas F5 veras que la cookie llega y el mensaje cambia.</p>
		
		<?= $_COOKIE['centro'] ?? "<p>No recibida</p>"?>
	</body>
</html>