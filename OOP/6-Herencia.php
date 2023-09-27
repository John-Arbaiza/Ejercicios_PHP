<?php

//clase Automovil de un ejemplo pasado la cual sera nuestra clase base para este ejemplo
class Automovil{

    //propiedades de nuestra clase
    public $marca = "Toyota";
    public $color = "Gris";
    public $potencia;

    // metodos de la clase 
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

//Clase que heredara de Automovil
class AutoDeLujo extends Automovil{
     
    //Metodos de nuestra nueva clase los cuales se encargan de mostrar datos
    public function mostrarColor(){
        return $this->color;
    }
    public function mostrarMarca(){
        return $this->marca;
    }
    public function mostrarPotencia(){
        return $this->potencia;
    }
}

//Definimos una instancia de la clase AutoDELujoS
$MyCar = new AutoDeLujo;
echo "Mi auto de lujo es color:" . $MyCar->mostrarColor();

echo "\n";