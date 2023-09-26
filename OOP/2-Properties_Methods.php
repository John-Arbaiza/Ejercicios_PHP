<?php

//Definimos una clase perro
class Perro{

    /* ----------------------------| INFO |----------------------------
       Las propiedades en php no son más que aquellas caracteristicas propias de un objeto por
       ejemplo, esta clase perro tiene caractericas únicas y diferentes en cuanto a otros objetos */

    //Propiedades de perro
    public $color = "Blanco parcheado";
    public $raza;
    public $tamaño = "Pequeño";
    public const years = 2;

    /* Los métodos son los comportamientos propios que puede tener ese objeto */
    public function ladrar(){
        echo "Guau guau";
    }

    public function grunir(){
        echo "Grrrrr";
    }
}

//Instancia de la clase perro
$Bóxer = new Perro;

//Mensaje 
echo $Bóxer->ladrar();
echo "\n";