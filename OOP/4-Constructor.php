<?php

class OtroCarro{
    public $color;

    public function __construct($color){
        $this->color = $color;
    }
}

$miOtroCarro = new OtroCarro('Rojo');
echo $miOtroCarro->color;
echo "\n";