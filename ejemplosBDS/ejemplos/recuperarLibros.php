<?php
// Lanza la consulta
$resultado =$conexion->query("SELECT * FROM libros");
// prepara una lista de libros
$libros =[];

//convierte cada fila del resultado en un objeto Libro...
while($libro = $resultado ->fetch_object('Libro')){
    $libros[] = $libro; //... y lo mete en el array
}
$resultado->free(); //libera memoria

//en este punto, hemos convertido el resultado de la consulta
// en una lista de libros.
