<?php

function f1() {
    f2();
    echo 'f1', PHP_EOL;
}

function f2() {
    f3();
    echo 'f2', PHP_EOL;
}

function f3() {
    echo 'f3', PHP_EOL;
}

/////////////////////////

echo 'Las funciones se comenzaran a apilar...', PHP_EOL;
f1();