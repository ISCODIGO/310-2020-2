<?php

function duplicarPorValor($numero) {
    $numero *= 2;
    return $numero;
}

function duplicarPorReferencia(& $numero) {
    $numero *= 2;
    return $numero;
}

$n = 10;
echo "<br> Valor de n antes del llamado: $n";
echo "<br> Valor de n en el llamado: ";
echo duplicarPorReferencia($n);
echo "<br> Valor de n despues del llamado: $n";

echo '<br>sumar=' . fsumar([4, 5, 9, 1, 2]);

$arr2 = [4, 5, 9, 1, 2];
echo "<br>max de ";
print_r($arr2);
echo ' es : ' . fmax($arr2);


function fsumar($numeros) {
    // recorrido lineal
    $total = 0;
    foreach($numeros as $x) {
        $total += $x;
    }
    return $total;
}

function fmax($numeros) {
    $max = $numeros[0];
    foreach($numeros as $x) {
        if ($x > $max) {
            $max = $x;
        }    
    }
    return $max;
}