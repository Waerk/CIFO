<?php
$id = intval($_GET['id']);

$libro = Libro::findOrFail($id, 'No se encontro el libro');

require '../views/libro/borrar.php';