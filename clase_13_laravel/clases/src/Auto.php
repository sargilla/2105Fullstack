<?php

class Auto {
    
    public $marca;
    public $modelo;
    private $color;
    public $tacometro = 0;
    public $tanque = 100;

   
    public function __construct($marca, $modelo, $color = 'Blanco')
    {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->color = $color;
    }

    public function getColor(){
        return $this->color;
    }
    public function setColor($color){
        $this->color = $color;
        return $this;
    }

    public function setMarca($marca){
        $this->marca = $marca;
        return $this;
    }

    public function andar($km = 1){
        $this->tacometro += $km;
        $this->tanque -= $km / 4;
        echo "Me di una vueltita de {$km} km.\n";
    }

    public function describir(){
        echo "Soy un  {$this->marca} {$this->modelo} de color {$this->color} \n" ;
    }
}

?>