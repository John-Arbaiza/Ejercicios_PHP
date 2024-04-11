<?php

//Declaracion de un arreglo
$miArreglo = [];
$bestLanguages = ["C#","Python","Java"];
$miArreglo [0] = 1;

//Declaracion alternativa
$miArreglo2 = array();
$miArreglo2[0] = 2;
$bestLanguages[] = "JavaScript";

//Mostrando los resultados
print("Forma 1" .PHP_EOL);
echo "{$miArreglo[0]}" . PHP_EOL;

print("Forma 2-alternativa" . PHP_EOL);
echo "{$miArreglo2[0]}" . PHP_EOL; 

//iterando el array
foreach($bestLanguages as $lenguaje){
    echo "{$lenguaje}". PHP_EOL;

}

//Ahora sacamos el indice
echo "\n";
foreach($bestLanguages as  $key => $lenguaje){
    echo "{$key}". PHP_EOL;

}

//Ejemplo de array asociatovio esto seria similar a un diccionario
$persona = [
    'name' => "John",
    'age'  => 20,
    'Lenguajes' => ["C#", "Python", "Java"],
];

foreach($persona as   $clave => $valor){
    if (is_array($valor)) {
        // Si el valor es un array (como los lenguajes), conviértelo a una cadena
        $valor = implode(', ', $valor);
    }
    echo "{$clave}: {$valor}" . PHP_EOL;
}