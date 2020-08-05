<?php

function f1() {
    f1();
    echo 'f1', PHP_EOL;
}

echo 'f1 se apilara de forma recursiva', PHP_EOL;
f1();
