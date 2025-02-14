<?php
//conecta y establece el charset
$conexion = new mysqli('localhost', 'root', '', 'biblioteca');
$conexion->set_charset('utf8');

//preparamos una consulta de actualizacion
$consulta="UPDATE libros
          SET titulo='La historia interminable'
          WHERE titulo = 'Neverending Story'";
//lanza la consulta contra la BDD
$conexion->query($consulta);
echo "<p>Actualizacion de $conexion->affected_rows filas OK</p>";