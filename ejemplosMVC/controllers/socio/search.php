<?php
$campo      =$_POST['campo'] ?? 'titulo';
$valor      =$_POST['valor'] ?? '';
$orden      =$_POST['orden'] ?? 'id';
$sentido    =$_POST['sentido'] ?? 'ASC';

$socios = Socio::getFiltered($campo, $valor, $orden, $sentido);

require '../views/socio/lista.php';