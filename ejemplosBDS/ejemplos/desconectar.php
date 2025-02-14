<?php
//crea una conexion con la BDD biblioteca
$conexion = new mysqli('localhost', 'root', '', 'biblioteca');
// establece el conjunto de caracteres a UTF-8
$conexion->set_cherset('utf8');

echo "<p> La conexion se ha establecido correctamente </p>";

//una vez conectado, hacemos consultas a la BDD
//...
// cerrar la conoxion (opcional, solo es necesario en conexiones persistentes)
$conexion->close();