<?php

/**
 * Los factores primos de 13195 son 5, 7, 13 y 29.
 * ¿Cuál es el factor primo más grande del número 600851475143?
 */

function es_primo(int $numero) : bool {
    // Se realiza una division entera
    $mitad = intdiv($numero, 2);

    if ($numero % 2 == 0) {
        return false;
    }

    for ($i = 3; $i < $mitad; $i += 2) {
        if ($numero % $i == 0) {
            return false;
        }
    }

    return true;
}

////////////////////////////////////////////////////////

function factores(int $numero) {
    // obtener aquellos que dividen exactamente (residuo cero) al $numero

    // el factor primo mas alto ?????

    // rango de los posibles candidatos a factor
    // [2, n/2]
    $mitad = intdiv($numero, 2);
    $i = $mitad;
    while ($i >= 3) {
        if ($numero % $i == 0) {
            // es primo?
            if (es_primo($i)) {
                return $i;
            }
        }

        // si $i es par lo reduzco un valor
        if ($i % 2 == 0) {
            $i--;
        }

        $i -= 2;
    }

    return 0;
}
 
//////////////////////////////////////////////////

$inicio = microtime(true);

echo factores(13195);
echo '<br>';
//echo factores(600851475143);
echo '<br>';

$final = microtime(true);
$lapso = $final - $inicio;
echo "Duracion: $lapso";

// 0.00046992301940918