<?php
$campo      =$_POST['campo'] ?? 'titulo';
$valor      =$_POST['valor'] ?? '';
$orden      =$_POST['orden'] ?? 'id';
$sentido    =$_POST['sentido'] ?? 'ASC';

$libros = Libro::getFiltered($campo, $valor, $orden, $sentido);

require '../views/libro/lista.php';