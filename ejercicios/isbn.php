<?php

// obtener la cadena (ya esta limpia)
$isbn = '9783161484100';

// recorrer una cadena por sus letras
$acumulado = 0;

for ($i = 0; $i < strlen($isbn); $i++) {
    $letra = $isbn[$i];

    if ($i % 2 == 0) {
        $acumulado += (int)$letra * 1;
    } else {
        $acumulado += (int)$letra * 3;
    }
}

$digito_control = 10 - ($acumulado % 10);

if ($digito_control === 10) {
    $digito_control = 0;
}

// corroboro que el digito_control sea igual a la posicion 12 de nuestra cadena
// si son iguales el isbn es valida
var_dump($digito_control);
echo '<br>';
var_dump($isbn[12]);
echo '<br>';
if ($digito_control == $isbn[12]) {
    echo 'ISBN es valido';
} else {
    echo 'ISBN invalido';
}