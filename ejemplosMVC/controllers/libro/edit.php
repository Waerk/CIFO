<?php
$libro = Libro::findOrFail(intval($_GET['id']), 'No se encontro el libro');

require '../views/libro/actualizar.php';
