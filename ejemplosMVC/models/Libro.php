<?php
#[AllowDynamicProperties]
class Libro{
    
    // NO indicare las PROPIEDADES, las creara
    // dinamicamente el metodo fetch_object() a partir de
    // los campos recuperados en la consulta
    
    // no indicare el CONSTRUCTOR, da poblemas con el fetch_object()
    
    //implementare el metodo toString() solamente para demostrar que funciona
    public function __toString(){
        return "$this->titulo, de $this->autor. Editorial $this->editorial.";
    }
}