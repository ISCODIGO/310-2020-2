<?php

/**
 * Los factores primos de 13195 son 5, 7, 13 y 29.
 * ¿Cuál es el factor primo más grande del número 600851475143?
 */

function factores(int $numero): int {
    for ($i = 2; $i < $numero; $i++) {
        while ($numero % $i == 0) {            
            $numero = intdiv($numero, $i);
        }
    }

    return $numero;
}

$inicio = microtime(true);

echo factores(13195);
echo '<br>';
echo factores(600851475143);
echo '<br>';

$final = microtime(true);
$lapso = $final - $inicio;
echo "Duracion: $lapso";