<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Imprimiendo en PHP</title>
</head>
<body>
<h1>Imprimiendo</h1>
<?php
$nombre = "Robert";

echo '<p<Bienvenido '.$nombre.'</p>';


echo "<p>Bienvenido $nombre </p>";
print "<p>Bienvenido $nombre </p>";


printf('<p>Bienvenido %s</p>', $nombre);
?>

<h2>Forma abreviada</h2>
<p>Bienvenido <?= $nombre ?></p>

<h2>Impresión condicional</h2>
<p><?= empty($nombre) ? "Identificate" : "Bienvenido $nombre"?></p>
</body>
