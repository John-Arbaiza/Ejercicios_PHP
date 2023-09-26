<?php

//Definimos una clase Automovil
class Automovil{

    //Definimos las propiedades de nuestra clase
    public $marca = "Toyota";
    public $color = "Gris";
    public $potencia;

    //Declaramos los metodos que tendra la clase los cuales seran de tipo public 
    public function getMarca(){
        return $this->marca;
    }

    public function getColor(){
        return $this->color;
    }

    public function getPotencia(){
        return $this->potencia;
    }
}

//Instancia de la clase Automovil 
$newCar = new Automovil;

//Obtenemos el color de nuestro automovil
echo "El color de mi auto es: " . $newCar->getColor();

echo "\n";

