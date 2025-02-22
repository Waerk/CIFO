<?php
$socio = Socio::findOrFail(intval($_GET['id']), 'No se encontro el Socio');

require '../views/socio/actualizar.php';
