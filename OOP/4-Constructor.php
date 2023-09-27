<?php

class OtroCarro{
    public $color;

    // Constructor de la clase, se ejecuta cuando se crea una nueva instancia de la clase
    public function __construct($color){
        // Asignando el valor del parámetro $color a la propiedad $color de la instancia
        $this->color = $color;
    }
}

$miOtroCarro = new OtroCarro('Rojo');
echo $miOtroCarro->color;
echo "\n";