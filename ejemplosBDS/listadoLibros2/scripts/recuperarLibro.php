<?php
$id = $_GET['id'];

// lanza la consulta
$resultado = $conexion->query("SELECT * FROM libros WHERE id=$id");

//prepara una lista de libros
$libro = $resultado->fetch_object(); 



$resultado->free();
// en este punto, hemos convertido el resultado de la consulta
// en una lista de libros.
?>