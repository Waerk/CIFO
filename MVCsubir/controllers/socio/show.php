<?php
//Comprueba si llega el ID del socio por la URL
if(empty($_GET['id']))
    throw new NothingtoFindException("Falta el id del socio.");
    
    $id = intval($_GET['id']); //toma el id
    
    //recupera el socio y comprueba que existe
    if(empty($socio = Socio::find($id)))
        throw new NotFoundException("No existe el socio $id.");
        
        $prestamos = $socio->hasMany('Prestamo');
        //carga la vista de detalles del socio
        require '../views/socio/detalles.php';
        