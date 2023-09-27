<?php

class Animal{

    /*Animal es un concepto generico ya que exiten muchos tipos de animales 
      debido a la naturaleza generica, tambien su metodo lo es, aunque de maneras 
      distintas pero todos los animales comen*/

      // Método para que los animales coman
      protected function comer(){
        echo "Comiendo....";
      }
}


class Tortuga extends Animal{

    // sobrescribiendo el método comer en la clase Tortuga
    public function comer(){
        echo __CLASS__;
    }
}

class Gallina extends Animal{
    // sobrescribiendo el método comer en la clase Gallina
     public function comer(){
        echo __CLASS__;
     }
}

$tortuga = new Tortuga; //Es un animal pero concretamente es una Tortuga
$gallina = new Gallina; // Es un animal pero concretamete es una Gallina

$tortuga->comer();
echo "\n";

/* ---------------------------| INFO |------------------------
   En leguajes fuertemente tipados es más fácil ver el polimorfismo al momento
   de la creación.
   La instancia anterior podria verse como "Animal $tortuga = new Tortuga */
