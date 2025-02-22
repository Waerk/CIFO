<?php
if(empty($_POST['actualizar']))
    throw new FormException('No se recibio el formulario');
    // recupera el socio a partir del ID (ojo que ahora va por POST).
    $socio = Socio::findOrFail(intval($_POST['id']), 'No se encontro el socio');
    
    // actualiza los campos de socio con los datos del formulario
    $socio->dni             = $_POST['dni'];
    $socio->nombre          = $_POST['nombre'];
    $socio->apellidos       = $_POST['apellidos'];
    $socio->nacimiento      = date($_POST['nacimiento']);
    $socio->email           = $_POST['email'];
    $socio->direccion       = $_POST['direccion'];
    $socio->cp              = intval($_POST['cp']);
    $socio->poblacion       = $_POST['poblacion'];
    $socio->provincia       = $_POST['provincia'];
    $socio->telefono        = intval($_POST['telefono']);
      
    $socio->update();
    
    $mensaje = "Actualización del socio $socio->id correcto.";
    require '../views/exitoSo.php';