<?php

/**
 * Implementacion de la pila
 */

require_once('StackArray.php');
$pila = new StackArray();

$pila->push(10);
$pila->push(20);

// Debe imprimir el ultimo elemento, en este caso es 20
echo 'Top: ', $pila->top(), PHP_EOL;
echo 'Pop: ', $pila->pop(), PHP_EOL;
echo 'Top: ', $pila->top(), PHP_EOL;
echo 'Pop: ', $pila->pop(), PHP_EOL;
echo 'Top: ', $pila->top(), PHP_EOL;