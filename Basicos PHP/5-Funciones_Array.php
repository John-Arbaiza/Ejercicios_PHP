<?php

//Definimos una funcion cuadrado, que calcula el cuadrado de un número.
function cuadrado($n){
    return ($n * $n);
}

//Declamos un array de nuemros
$numeros = array(1,2,3,4,5,6,7);

//Usamos la función array_map para aplicar la función 'cuadrado' a cada elemento del array '$numeros'
$resultado = array_map('cuadrado', $numeros);

 /*
 //Imprimiendo el resultado del array después de aplicar la función 'cuadrado' a cada elemento.
 print_r($resultado);

 //Se encarga de imprimir cada valor del array '$resultado' en una nueva línea.
 foreach ($resultado as $key => $value){
    echo $value . PHP_EOL;
 }*/

 print_r(array_diff($numeros));

 //---------------
 //     INFO
 //---------------
 //array_map lo que hace es  tomar una función y uno o más arrays y aplica la función a cada elemento 
 //de los arrays de entrada, devolviendo un nuevo array con los resultados.

 //array_diff se utiliza para calcular la diferencia entre dos o más arrays