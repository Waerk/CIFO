<?php
include '../config/config.php';
include '../autoload.php';

echo "<h2>Guardando un tema...</h2>";

$consulta = "INSERT INTO temas(tema, descripcion)
             VALUES('Viajes', 'Viaje con nosotros si quiere jugar')";

$id = DBMysqli::insert($consulta);

echo "<p>El ID del nuevo tema es $id</p>";