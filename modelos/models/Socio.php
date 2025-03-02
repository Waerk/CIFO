<?php
#[\AllowDynamicProperties]
class Socio{
    
    public static function all():array{
        return DBMysqli::selectAll("SELECT * FROM socios", self::class);
    }
    
    public static function find (int $id):?self{
        $consulta = "SELECT * FROM socios WHERE id = $id";
        return DBMysqli::select($consulta, self::class);
    }
    
    public function save():int{
        $consulta = "INSERT INTO socios(
        dni, nombre, apellidos, nacimiento, email, direccion, cp, poblacion, provincia, telefono, foto, alta)VALUES(
        '$this->dni', '$this->nombre', '$this->apellidos', '$this->nacimiento',
        '$this->autor', $this->email, '$this->direccion', '$this->cp', '$this->poblacion',
        '$this->provincia', '$this->telefono', '$this->foto', $this->alta)";
        
        $this->id = DBMysqli::insert($consulta);
        
        return $this->id;
    }
    public function update():int{
        $consulta="UPDATE socios SET
            dni = '$this->dni',
            nombre = '$this->nombre',
            apellidos = '$this->apellidos',
            nacimiento = '$this->nacimiento',
            email = '$this->email',
            direccion = '$this->direccion',
            cp = '$this->cp',
            poblacion = '$this->poblacion',
            provincia = '$this->provincia',
            telefono = '$this->telfono',
            foto = '$this->foto',
            alta = $this->alta
            
           WHERE id = $this->id";
        
        return DBMysqli::update($consulta);
    }
    
    public static function delete(int $id):int{
        $consulta="DELETE FROM socios WHERE id = $id";
        return DBMysqli::delete($consulta);
    }
    public function deleteObject():int{
        $consulta="DELETE FROM socios WHERE id = $this->id";
        return DBMysqli::delete($consulta);
    }
    
    public static function total(
        string $operacion = 'COUNT',
        string $campo = '*'
        ):mixed{
            return DBMysqli::total('socios', $operacion, $campo);
    }
    public function __toString():string{
        return "Socio $this->id: $this->dni / $this->nombre / $this->apellidos / $this->nacimiento / $this->email / $this->direccion / $this->cp / $this->poblacion / $this->provincia / $this->telefono / $this->foto / desde: $this->alta";
    }
}