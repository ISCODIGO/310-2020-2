<?php

require_once('PilaInterface.php');

class PilaArray implements PilaInterface {
    private $datos;
    private $size;

    public function __construct() {
        $this->datos = [];
        $this->cima = -1;
    }

    public function push($elemento) {
        array_push($this->datos, $elemento);        
        $this->cima++;
    }

    public function pop() {
        if ($this->is_empty()) {
            throw new Exception('Pila vacia');
        }

        $aux = $this->datos[$this->cima];
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

    public function is_empty(): bool {
        return ($this->cima == -1);
    }
}