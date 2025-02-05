<?php
$campo =  $_GET['campo'] ?? 'dni';
$valor = $_GET['valor'] ?? '';
$orden = $_GET['orden'] ?? 'id';
$sentido = $_GET ['sentido'] ?? 'ASC';

$consulta = "SELECT * FROM usuarios
             WHERE $campo LIKE '%$valor%'
             ORDER BY $orden $sentido";
echo $consulta;
?>