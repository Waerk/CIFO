<?php 
#[\AllowDynamicProperties]
class Libro{
    
    public static function all():array{
    	return DBMysqli::selectAll("SELECT * FROM libros", self::class);
    }
    
    public static function find (int $id):?self{
        $consulta = "SELECT * FROM libros WHERE id = $id";
        return DBMysqli::select($consulta, self::class);
    }
    
    public function save():int{
        $consulta = "INSERT INTO libros(
        isbn, titulo, editorial, idioma, autor, edicion, edadrecomendada)VALUES(
        '$this->isbn', '$this->titulo', '$this->editorial', '$this->idioma',
        '$this->autor', $this->edicion, $this->edadrecomendada)";
        
        $this->id = DBMysqli::insert($consulta);
        
        return $this->id;
    }
    public function update():int{
        $consulta="UPDATE libros SET
            isbn = '$this->isbn',
            titulo = '$this->titulo',
            editorial = '$this->editorial',
            idioma = '$this->idioma',
            autor = '$this->autor',
            edicion = $this->edicion,
            edadrecomendada = $this->edadrecomendada
    
           WHERE id = $this->id";
        
        return DBMysqli::update($consulta);
    }
    
    public static function delete(int $id):int{
        $consulta="DELETE FROM libros WHERE id = $id";
        return DBMysqli::delete($consulta);
    }
    public function deleteObject():int{
        $consulta="DELETE FROM libros WHERE id = $this->id";
        return DBMysqli::delete($consulta);
    }
    
    public static function total(
        string $operacion = 'COUNT',
        string $campo = '*'
        ):mixed{
        return DBMysqli::total('libros', $operacion, $campo);
    }
    public function __toString():string{
        return "LIBRO $this->id: $this->isbn $this->titulo, de $this->autor";
    }
    public static function getFiltered(
        string $campo = 'titulo',
        string $valor = '',
        string $orden = 'id',
        string $sentido = 'ASC'
        ):array{
        $consulta = "SELECT * FROM libros WHERE $campo LIKE '%$valor%'
                     ORDER BY $orden $sentido";
        
        return DBMysqli::selectAll($consulta, self::class);
    }
}