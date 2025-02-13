<?php
// establece la conexion y charset
$conexion = new mysqli('localhost', 'root', '', 'biblioteca');
$conexion->set_charset('utf8');

//prepara una consulta de insercion en un string (recomendado)
// es util si tenemos que depurar porque podremos hacer echo $consulta para
// visualizar los errores, incluso podremos copiar y pegar en el WorkBench.
$consulta = "INSERT INTO libros(
                 isbn, titulo, editorial, idioma,
                 autor, edicion, edadrecomendada
            )VALUES('123456', 'Neverending Story', 'Alfaguara', 'English',
                'Michael Ende', 5, 3)";

//ejecuta la consulta que acabamos de preparar
$conexion->query($consulta);

//muestra el resultado
echo "<p> Todo OK, el ID del registro es $conexion->insert_id</p>";