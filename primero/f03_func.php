<?php

// clases
// constantes
// variables

$__saludo = 'HOLA MUNDO';

define('constante_saludo', 'HOLA... ESTO ES UNA CONSTANTE');

// funciones
function evaluarEdad($x = 99) {
    echo "<br>La edad evaluada es $x y el resultado: ";
    if ($x >= 21) {
        // rango edad superior ~ 21
        echo 'Mayor de edad';
    } else if ($x >= 18) {
        // rango 20 ~ 18
        echo 'Ciudadano';
    } else {
        echo 'Niño';
    }
}

function sumar($a, $b) {
    return $a + $b;
}

function saludar($introduccion, $mensaje='Me alegra saludarte') {
    echo "${introduccion}, $mensaje";
}

// ambito de las argumento
