<?php

$x = 10;
$y = $x;    // Pasando por valor.

$y++;

echo $x, ',' ,$y;

$r = 10;
$s = & $r;  // Pasando por referencia.
$t = & $s;
$t++;

echo PHP_EOL;
echo $r, ',', $s, ',', $t;


echo PHP_EOL;
echo __DIR__;
echo PHP_EOL;
echo dirname(__DIR__);
echo PHP_EOL;
echo DIRECTORY_SEPARATOR;
?>