<?php

/**
 * La siguiente es una Interface que nos permite
 * utilizar las operaciones basicas de una Pila
 */

interface InterfaceStack {
    // Funcion para agregar un elemento
    public function push($elemento);

    // Funcion para eliminar un elemento (Retorna el elemento)
    public function pop();

    // Funcion para obtener el elemento que esta al inicio (sin eliminarlo)
    public function top();

    // Funcion para saber si la pila esta vacia
    public function is_empty(): bool;

    // Funcion para limpiar la estructura (quitar todos los elementos)
    public function clear();
}