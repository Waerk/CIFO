<?php
$conexion = new mysqli('localhost', 'root', '', 'biblioteca');
$conexion->set_charset('utf8');

//preparamos y lanzamos una consulta de la seleccion
$consulta = "SELECT * FROM libros WHERE id=1";
$resultado = $conexion->query($consulta);

// si hay resultados...
if($resultado->num_rows){
    //recuperamos el resultado a mode de array associativo
    $libro = $resultado->fetch_array(MYSQLI_NUM);
    $resultado->free(); //libera memoria
    
    //muestra la estructura de $libro
    echo "<pre>";
    var_dump($libro);
    echo "</pre>";
}else{
    echo "No se encontro el libro deseado";
}