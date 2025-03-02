<?php 
class User{
//propiedades
public string $userName; //nombre de usuario
public string $password; //password
public array $roles;     // lista de roles (para autorización

// constructor
public function __construct(string $userName, string $password, array $roles){
    $this->userName = $userName;
    $this->password = $password;
    $this->roles = $roles; 
}

// metodo que comprueba si un usuario tiene un determinado rol
public function hasRole (string $role):bool{
    return in_array($role, $this->roles);
}
}
?>