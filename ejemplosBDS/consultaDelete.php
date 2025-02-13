<?php
//conecta y establece el charset
$conexion = new mysqli('localhost', 'root', '', 'biblioteca');
$conexion->set_charset('utf8');

//preparamos una consulta de borrado
$consulta="DELETE FROM libros
           WHERE titulo='La historia interminable'";

//lanza la consulta contra la BDD
$conexion->query($consulta);
echo "<p>Borrado de $conexion->affected_rows filas OK</p>";