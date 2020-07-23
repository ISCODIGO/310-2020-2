<?php

require_once('f03_func.php');

// condiciones ~ if
$edades = [12, 24, 18];

// bucles
for ($i = 0; $i < count($edades); $i++) {
    evaluarEdad($edades[$i]);
}

echo 'Aqui no tengo ningun argumento...';
evaluarEdad();

echo '<br>';
echo sumar(3.5, 2.3);

saludar('Que tal');

$__saludo = 'ADIOS';
echo '<br>';
echo $__saludo;

//constante_saludo = 'ADIOS';
echo '<br>';
echo constante_saludo;

$x = 'sumar';
echo '<br>';
echo $x(5, 4);