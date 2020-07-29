<?php
$inicio = microtime(true);
//////////
$a = 10000000000000;
/////////
$final = microtime(true);
$lapso = $final - $inicio;
echo "Duracion: $lapso";