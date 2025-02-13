<?php
// crea una conexion PERSISTENTE con al BDD bilbioteca
$conexion = new mysqli('p:localhost', 'root', '', 'biblioteca');

//establece la codificacion de caracteres a UTF-8
$conexion ->set_charset('utf8');
echo "<p> La conexion se ha estableciod correctamente</p>";
//una vez conectado, hacemos consultas a la BDD
//...

// cerrar la conexion, puede que no se haga al final del script
// pero en algun momento habra que liberar ese recurso
$conexion->close();
