<?php
$a = [];
$b = [];
for ($i = 0; $i < 10; $i++) {
    array_push($a, $i);
}

for ($i = 0; $i < 1e6; $i++) {
    array_push($b, $i);
}

$inicio = microtime(true);

$c1 = count($a);

$final = microtime(true);
$lapso = $final - $inicio;
echo "Duracion en array vacio: $lapso";

$inicio = microtime(true);

$c2 = count($b);

$final = microtime(true);
$lapso = $final - $inicio;
echo "\nDuracion en array de un millon: $lapso";
