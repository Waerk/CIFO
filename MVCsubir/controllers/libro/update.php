<?php
if(empty($_POST['actualizar']))
    throw new FormException('No se recibio el formulario');
// recupera el libro a partir del ID (ojo que ahora va por POST).
$libro = Libro::findOrFail(intval($_POST['id']), 'No se encontro el libro');

// actualiza los campos de libro con los datos del formulario
$libro->isbn        =$_POST['isbn'];
$libro->titulo      =$_POST['titulo'];
$libro->editorial   =$_POST['editorial'];
$libro->autor       =$_POST['autor'];
$libro->idioma      =$_POST['idioma'];
$libro->edicion     =intval($_POST['edicion']);
$libro->edadrecomendada = intval($_POST['edadrecomendada']);

$libro->update();

$mensaje = "Actualización del libro $libro->titulo correcto.";
require '../views/exito.php';