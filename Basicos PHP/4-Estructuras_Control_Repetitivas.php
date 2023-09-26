<?php

//Definimos una variable que tendra como valor un array
$numerosNaturales = array(0,1,2,3,4,5,6,7,8,9);

// Ciclo for que itera desde i = 0 hasta i < 10
for ($i=0; $i < 10; $i++) { 
    //While
    while($numerosNaturales[$i] < 10){
        // Se encarga de comprobar si el número actual en el array está entre 1 y 8
        if($numerosNaturales[$i] > 1 && $numerosNaturales[$i] < 9){
            //Imprimimos el numero actual
            echo $numerosNaturales[$i] . PHP_EOL;
        }
        break;
    }
}