<?php

$a = 10;
$A = 'hola';

echo $a;
echo '<br>';
echo $A;
echo '<br>';
var_dump($a);
echo '<br>';
var_dump($A);

$b = 3.14;
echo '<br>';
var_dump($b);

$x = 10;
$x = 'hola';
var_dump($x);

$b = true;
$c = false;

echo '<br>';
var_dump($c);


$cadena = '3hola5';
echo '<br>';
var_dump($cadena);
$numero = (float)$cadena;
echo '<br>';
var_dump($numero);

/* booleanos */
$b1 = (bool)'';
echo '<br>Cadena vacia: ';
var_dump($b1);

$b2 = (bool)'h';
echo '<br>Cadena no vacia: ';
var_dump($b2);

$b2 = (bool)'false';
echo "<br>'false': ";
var_dump($b2);

$n1 = (bool)0;
echo "<br>0: ";
var_dump($n1);

$n1 = (bool)1;
echo "<br>1: ";
var_dump($n1);

$n1 = (bool)-1;
echo "<br>-1: ";
var_dump($n1);

$n1 = (bool)10000;
echo "<br>100000: ";
var_dump($n1);

// float
echo '0.0 es: ';
var_dump(0.0);

$n1 = (bool)0.0;
echo "<br>0.0: ";
var_dump($n1);

$n1 = (bool)1.1;
echo "<br>1.1: ";
var_dump($n1);

$n1 = (bool)-1.0;
echo "<br>-1.0: ";
var_dump($n1);

$n1 = (bool)164.64556;
echo "<br>164.64556: ";
var_dump($n1);

$arr1 = [];
echo '<br>Arreglo: ';
var_dump($arr1);

$arr2 = [[]];
echo '<br>';
var_dump($arr2);

echo '<br>';
var_dump((bool)$arr1);
echo '<br>';
var_dump((bool)$arr2);

echo '<br>';
var_dump((int)$arr1);
echo '<br>';
var_dump((int)$arr2);


$saludo = 'hola';
$hola = 'Estas saludando';
echo '<br>';
echo $$saludo; // echo $hola
echo '<br>';
echo ${$saludo};

$nombre = 'Gabriel';
echo '<br>';    
echo "El nombre del usuario es: ${nombre}a";
echo '<br>'; 
var_dump('\n');
echo '<br>'; 
echo "hola" . PHP_EOL . "mundo";

?>