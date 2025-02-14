<?php
$conexion = new mysqli('localhost', 'root', '', 'biblioteca');
// el usuario root sin password existe por defecto en XAMPP
// lo usaremos para el desarrollo y pruebas
// en produccion nunca lo tendremos así

// establece la codificacion de caracteres a UTF-8
$conexion-> set_charset('utf8');

echo "<p>La conexion se ha establecido correctamente </p>";