<?php

class Ave{

    public function volar(){
        echo "Puedo volar....";
    }
}

//Definimos una interfaz llamada "PuedoNadar" que contiene el método abstracto "nadar".
interface PuedeNadar{
    public function nadar();
}

/* Generara error debido a que no se implementan los metodos
   
   class Pinguino extends Ave implements PuedeNadar{

   }
*/

//Definimos una clase "Pez" que implementa la interfaz "PuedoNadar" y 
//proporciona una implementación concreta del método "nadar".
class Pez implements PuedeNadar{
    
    public function nadar(){
        echo "Puedo nadar....";
    }
}

// Se crea una instancia de la clase "Pez" y se llama al método "nadar()"
$p = new Pez;
$p->nadar();
echo "\n";