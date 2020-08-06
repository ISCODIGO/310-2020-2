<?php

/**
 * Implementacion de la pila
 */

//require_once('StackArray.php');

//$pila = new StackArray();

require_once 'StackLL.php';

$pila = new StackLL();

$pila->push(10);
$pila->push(20);

// Debe imprimir el ultimo elemento, en este caso es 20
echo 'Top: ', $pila->top(), PHP_EOL;
echo 'Pop: ', $pila->pop(), PHP_EOL;
echo 'Top: ', $pila->top(), PHP_EOL;
echo 'Pop: ', $pila->pop(), PHP_EOL;
echo 'Top: ', $pila->top(), PHP_EOL;