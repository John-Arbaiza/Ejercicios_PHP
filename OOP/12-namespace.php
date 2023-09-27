<?php

namespace Matematicas {

    class Calculadora{
        public static function sumar($a,$b){
            return $a + $b;
        }
    }
}

namespace Ciencias{
    use Matematicas\Calculadora; //No se puede usar calculadora si no se llama su namespace

    echo Calculadora ::sumar(20,30);
}