<?php

class Automovil{
    public function getMarca(){
        echo 'Toyota';
    }
}

trait Modelo{
    public function getModelo(){
        parent::getMarca();
        echo "Corola";
    }
}

class Maquina extends Automovil{
    use Modelo;
}

$c = new Maquina();
$c->getMarca() . PHP_EOL;
$c->getModelo();