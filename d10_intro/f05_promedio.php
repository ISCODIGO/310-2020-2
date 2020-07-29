<?php

$notas = [['Matematicas I', 80, 5], ['Sociologia', 85, 4], ['Ingles I', 90, 4]];

echo 'El promedio es: ' . calcular_promedio($notas);

/*

Array ( 
    [0] => Array ( [0] => Matematicas I [1] => 80 [2] => 5 ) 
    [1] => Array ( [0] => Sociologia [1] => 85 [2] => 4 ) 
    [2] => Array ( [0] => Ingles I [1] => 90 [2] => 4 ) )

sumatoria(notas * uv) / sumatoria(uv)

*/

function calcular_promedio($materias) {
    $sum_notas_uv = 0;
    $sum_uv = 0;
    $resultado = 0;

    foreach($materias as $clave => $valor) {
        for ($i=0; $i < count($valor); $i++) { 
            $nota = $valor[1];
            $uv = $valor[2];

            $sum_notas_uv += $nota * $uv;
            $sum_uv += $uv;
        }
    }

    // validar que $sum_uv != 0

    $resultado = $sum_notas_uv / $sum_uv;
    return round($resultado, 0);
}