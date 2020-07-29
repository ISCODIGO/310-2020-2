<?php

function sumar(...$numeros) {
    $total = 0;
    foreach($numeros as $x) {
        $total += $x;
    }
    echo '<br>';
    return $total;
}


echo sumar(1);
echo sumar(1, 2);
echo sumar(1, 2, 3);
echo sumar(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);