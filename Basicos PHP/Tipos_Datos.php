<?php

//---------------------------| Info |----------------------------
//Con echo podemos mostrar el contenido de variables y cadenas de texto
//La funcion var_dum muestra información estructurada sobre una o más expresiones incluyendo su tipo y valor

//Booleanos
echo "Tipo de dato Booleano --> ";
var_dump(TRUE);  // es igual a 1
var_dump(FALSE); // es igual a 0

//Enteros 
echo "\nTipo de datos enteros";
var_dump(10);
var_dump(-20);

//Flotantes (double)
echo "\nTipo de datos flotantes(double)";
var_dump(12.23);

//Cadenas de caracteres (string)
echo "\nTipo de datos string";
var_dump("Hola mundo desde php");
