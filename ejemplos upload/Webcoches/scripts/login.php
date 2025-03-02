<?php
// si llega el formulario de login (POST)
if(!empty($_POST['login'])){
    //tomar los datos
    $userName = $_POST['userName'];
    $password = $_POST['password'];
    
    // hacer login
    $nuevoUsuario = new User($userName, $password, ['ROLE_USER']);
    Session::set('user', $nuevoUsuario);
}

    // si piden hacer logout (mediante enlace, por GET)
if(isset($_GET['logout'])){
    Session::destroy();             // elimina la sesion
    header('Location: index.php');  //redireccion a la portada
}