<?php

//Declaramos una variable
$proyecto = "Pagina";
$Edad = 20;
$isOld = $Edad > 20;

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
<?= "Primera {$proyecto} con PHP". PHP_EOL ;
    echo "<script> alert('BIENVENIDO') </script> .";

    //constantes
    define('Logo_URL', 'https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/PHP-logo.svg/2560px-PHP-logo.svg.png');
?>

</h1>

<!--mostramos la imagen-->
<img src="<?= Logo_URL ?>" alt="php Logo" width="200px">

<!--Sintaxis alyernativa para trabajar con los if-->
<?php if ($isOld) : ?>
    <h2>Eres viejo, lo siento</h2>
<?php elseif ($Edad < 20) : ?>
    <h2>Aun eres joven</h2>
<?php else : ?>
    <h2>Todo Bien</h2>
<?php endif; ?>
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