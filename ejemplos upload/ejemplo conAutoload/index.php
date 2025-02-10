<?php
include 'config/config.php';
include 'libraries/autoload.php';

// a partir de este punto no haria falta mas includes o requires

//crea una Moto
$moto = new Moto('Honda','X2');
echo "<p>Se ha creado $moto.</p>";

$moto->arrancar();

//crea un Coche
$coche = new Coche('Toyota', 'Prius');
echo "<p>Se ha creado $coche.</p>";

$coche->arrancar();
