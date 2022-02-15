<?php

class Persona {
    
    public $nombre;
    public $apellido;

    public function __construct($nombre,$apellido)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
    }


   
    public function quienSoy(){
        echo "Soy {$this->nombre} {$this->apellido}";
    }
}

?>