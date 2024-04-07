<?php

//Declaramos una variable
$proyecto = "Pagina";

//Nos indica el valor y el tipo de dato de una variable
//var_dump($proyecto);
// nos indica el tipo de dato
//gettype($proyecto);

?>

<!--Ejemplo de mezcla de php con HTML Y CSS-->
<h1>
<!--Forma 1-->
<?php 
echo "Hola Mundo desde tu navegador";
echo "<br>";
?>
<!--Forma 2-->
<?= "Primera {$proyecto} con PHP". PHP_EOL ?>

</h1>

<style>

    :root {
        color-scheme: light dark;
    }


    body{
        display:grid;
        place-content:center;
        text-align: center;
    }
</style>