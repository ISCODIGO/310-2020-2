<?php

$inicio = microtime(true);
////////
$n = $_GET['n'];
for ($i = 0; $i < $n; $i++) {
    $a = $i;
}
///////
$final = microtime(true);
$lapso = $final - $inicio;
echo "N = $n, F(N): $lapso";