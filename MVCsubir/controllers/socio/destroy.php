<?php
if(empty($_POST['confirmarborrado']))
    throw new FormException("No se recibio la confirmacion.");
    
    $socio = Socio::findOrFail(intval($_POST['id']), 'No se encontro el socio');
    
        $socio->deleteObject();
        
        $mensaje = "Borrado del socio $socio->nombre $socio->apellidos, de $socio->dni correcto.";
        require '../views/exitoSo.php';