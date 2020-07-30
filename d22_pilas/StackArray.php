<?php

require_once('InterfaceStack.php');

class StackArray implements InterfaceStack {
    // Conjunto de los datos
    private $datos;

    // Apunta al elemento en la cima (top)
    private $cima;

    public function __construct() {
        $this->datos = [];
        $this->cima = -1;
    }

    public function push($elemento) {
        array_push($this->datos, $elemento);        
        $this->cima++;
    }

    public function is_empty(): bool {
        return ($this->cima == -1);
    }    

    public function pop() {
        $aux = $this->top();
        unset($this->datos[$this->cima--]);        
        return $aux;
    }

    public function top() {
        if ($this->is_empty()) {
            throw new Exception('Pila vacia');
        }

        return $this->datos[$this->cima];
    }

    public function clear() {
        $this->datos = [];
        $this->cima = -1;
    }
}