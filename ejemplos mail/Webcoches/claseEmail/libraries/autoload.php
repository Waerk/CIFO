<?php
// funcion usada para buscar las clases
function load (string $clase){
    // para cada directorio de la lista
    foreach(AUTOLOAD_DIRECTORIES as $directorio){
        $ruta="$directorio/$clase.php"; // calcula la ruta
        
        if (is_readable($ruta)){   // si es legible..
            require_once $ruta;   // carga la clase
            break;                 // ahora interaciones
        }
    }
}
// registrar la funcion de autoload anterior
spl_autoload_register('load');