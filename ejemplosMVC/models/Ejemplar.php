<?php
#[\AllowDynamicProperties]
class Ejemplar extends Model{
    
    protected static string $table = 'ejemplares';
    
    public function getLibro():?Libro{
        $consulta = "SELECT * FROM libros WHERE id=$this->id";
        return DBMysqli::select($consulta, 'Libro');
    }
    
}