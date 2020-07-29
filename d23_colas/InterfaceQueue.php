<?php

interface InterfaceQueue {
    // Inserta un elemento en el queue
    public function enqueue($elemento);

    // Quita un elemento del queue (retorna el valor)
    public function dequeue();

    // Muestra el elemento que esta al frente del queue
    public function front();

    // Funcion para saber si la pila esta vacia
    public function is_empty(): bool;    

    // Elimina todos los elementos del queue
    public function clear();
}