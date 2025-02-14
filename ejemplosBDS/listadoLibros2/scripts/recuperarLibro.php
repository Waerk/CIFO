<?php
$id = intval($_GET['id']);

// lanza la consulta
$resultado = $conexion->query("SELECT * FROM libros WHERE id=$id");

if(!$resultado->num_rows)
    throw new Exception('No hay resultados');

//prepara una lista de libros
$libros = $resultado->fetch_object('Libro'); 



$resultado->free();
// en este punto, hemos convertido el resultado de la consulta
// en una lista de libros.
?>