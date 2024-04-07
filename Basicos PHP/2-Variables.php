<?php

//Para declarar una variable en php, se usa el $
$nombre = "John Arbaiza";

//Mostrando el valor de la variable
echo "Mi nombre es: $nombre" . PHP_EOL;
echo "Hola me llamo: {$nombre}" . PHP_EOL;

//Ejemplo de variables variables

//Forma 1
$numero = 20;
$variable = "numero";
echo "{$$variable}" . PHP_EOL;
//Forma 2
$Saludo = "Como_estas";
$$Saludo = " el dia de hoy";
echo "$Como_estas" . PHP_EOL;


$n1 ="5";
$n2 ="10";
echo $n1 * $n2;
echo "\n";