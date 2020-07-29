<?php

require_once('QueueArray.php');

$cola = new QueueArray();
$cola->enqueue(10);
$cola->print();
$cola->enqueue(20);
$cola->print();
$cola->enqueue(30);
$cola->print();
$cola->dequeue();
$cola->dequeue();
$cola->print();
$cola->dequeue();
$cola->print();
$cola->enqueue(40);
$cola->print();
$cola->dequeue();
//$cola->dequeue();
$cola->print();