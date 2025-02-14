<?php
#[AllowDynamicProperties]
//clase Libro
class Libro{
   // No indicare las PROPIEDADES, las creara
   // dinamicamente el metodo fetch_object() a partir de
   // los campos recuperados en la consulta
   
    //NO indicare el constructor, da problemas con fetch_object()
    
    //Implementare el metodo toString() solamente para demostrar que funciona
    public function __toString(){
        return "$this->titulo, de $this->autor. Editorial $this->editorial.";
    }
}