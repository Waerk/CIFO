<?php
//comprueba que llega el formulario
if(empty($_POST['guardar']))
    throw new FormException('No se recibio el formulario');
    // crea un nuevo libro y toma sus valores del POST
    $socio = new Socio();
    
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
    
    $socio->save();
    
    //prepara un mensaje y carga la vista de exito
    $mensaje = "Guardado del socio ".$_POST['nombre']."correcto.";
    require '../views/exitoSo.php';