<?php
include '../config/config.php';
include '../autoload.php';

echo "<h2>Recuperando los temas...</h2>";
echo "<pre>";
var_dump(DBMysqli::selectAll("SELECT * FROM temas"));
echo "</pre>";

echo "<h2>Recuperando libros de Stephen King (no hay)...</h2>";
echo "<pre>";
var_dump(DBMysqli::selectAll("SELECT * FROM libros WHERE autor='Stephen King'"));
echo "</pre>";