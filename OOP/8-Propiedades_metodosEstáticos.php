<?php

class Calculadora{

    //Propiedad estatica de nuestra clase calculadora
    public static $marca = "Casio";

    //Metodos estaticos a los cuales se les pasa como parametro dos argumentos
    public static function sumar($n1, $n2){
        return $n1 + $n2 ;
    }

    public static function restar($n1, $n2){
        return $n1 - $n2 ;
    }
}

//Usamos la clase calculadora para realizar operaciones y mostrar datos
echo Calculadora::$marca . PHP_EOL;
echo Calculadora::sumar(5,5);
echo "\n";
echo Calculadora::restar(10,4);
echo "\n";