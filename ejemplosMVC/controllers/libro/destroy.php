<?php
    if(empty($_POST['confirmarborrado']))
        throw new FormException("No se recibio la confirmacion.");
    
       $libro = Libro::findOrFail(intval($_POST['id']), 'No se encontro el libro');
       
       if($libro->hasAny('Ejemplar'))
           throw new Exception('No se puede borrar un libro si tienes ejemplares.');
       
       $libro->deleteObject();
       
       $mensaje = "borrado del libro $libro->titulo, de $libro->autor correcto.";
       require '../views/exito.php';