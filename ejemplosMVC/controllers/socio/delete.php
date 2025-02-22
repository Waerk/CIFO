<?php
$id = intval($_GET['id']);

$socios = Socio::findOrFail($id, 'No se encontro el Socio');

require '../views/socio/borrar.php';