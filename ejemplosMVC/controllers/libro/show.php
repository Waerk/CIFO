<?php
//Comprueba si llega el ID del libro por la URL
if(empty($_GET['id']))
    throw new NothingtoFindException("Falta el id del libro.");
    
$id = intval($_GET['id']); //toma el id

//recupera el libro y comprueba que existe
if(empty($libro = Libro::find($id)))
    throw new NotFoundException("No existe el libro $id.");

    $ejemplares = $libro->hasMany('Ejemplar');
    
    $temas = $libro->belongsToMany('Tema', 'temas_libros');

//carga la vista de detalles del libro
require '../views/libro/detalles.php';
