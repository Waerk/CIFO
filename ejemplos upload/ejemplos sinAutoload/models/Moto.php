<?php
// clase Moto
class Moto extends Vehiculo{
    public function arrancar(){
        echo "Braaaaaam braaam";
    }
    public function __toString(){
        return "Moto: ".parent::__toString();
    }
}